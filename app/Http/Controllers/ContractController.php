<?php

namespace App\Http\Controllers;

use Artisan;
use Carbon\Carbon;
use App\Models\Users;
use App\Models\Contract;
use Illuminate\Http\Request;
use App\Imports\ContractImport;
use PhpParser\Builder\Function_;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Schema;
use App\Console\Commands\ExportDatabase;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Exceptions\Renderer\Exception;

class ContractController extends Controller
{
    // Role Admin
    /** 
     * Display a listing of the resource.
     */

    public function index()
    {
        $user = Auth::user()->name;
        $contract = Contract::paginate(10);
        Log::info('Showing the user profile for user: {users}', ['id' => $user]);
        return view('contract.index', compact('contract'), ['title' => 'Contract View']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contract.create', ['title' => 'Create Contract']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            'branch' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'regex:/^[^\'"]+$/'],
            'cust_id' => ['required', 'numeric', 'min_digits:8', 'max_digits:8'],
            'nameuser' => ['required', 'regex:/^[a-zA-Z0-9\s.,]+$/', 'regex:/^[^\'"]+$/'],
            'cae' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'regex:/^[^\'"]+$/'],
            'unit_head' => ['required', 'regex:/^[a-zA-Z\s.,]+$/', 'regex:/^[^\'"]+$/'],
            'cpart_pic_lst' => ['required', 'regex:/^[a-zA-Z0-9\s.,]+$/', 'regex:/^[^\'"]+$/'],
            'eff_dt' => ['nullable', 'date'],
            'contr_period' => 'required',
            'exp_dt' => 'nullable|date',
            'serv_ty' => 'required|regex:/^[^\'"]+$/',
        ]);

        // dd($request);
        Contract::create([
            'branch' => $request->branch,
            'cust_id' => $request->cust_id,
            'nameuser' => $request->nameuser,
            'cae' => $request->cae,
            'unit_head' => $request->unit_head,
            'unit_head_id' => Auth::id(),
            'cpart_pic_lst' => $request->cpart_pic_lst,
            'eff_dt' => $request->eff_dt,
            'contr_period' => $request->contr_period,
            'exp_dt' => $request->exp_dt,
            'serv_ty' => $request->serv_ty,
        ]);

        return redirect()->route('contract.index')->with(['add' => 'Data Added Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
        return view('contract.show', ['title' => 'Data Contract']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract)
    {
        return view('contract.edit', compact('contract'), ['title' => 'Edit Data Contract']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contract $contract)
    {

        $request->validate([
            'branch' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'regex:/^[^\'"]+$/'],
            'cust_id' => ['required', 'numeric', 'min_digits:8', 'max_digits:8'],
            'nameuser' => ['required', 'regex:/^[a-zA-Z0-9.,]+$/', 'regex:/^[^\'"]+$/'],
            'cae' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'regex:/^[^\'"]+$/'],
            'unit_head' => ['required', 'regex:/^[a-zA-Z\s.,]+$/', 'regex:/^[^\'"]+$/'],
            'cpart_pic_lst' => ['required', 'regex:/^[a-zA-Z0-9\s.,]+$/', 'regex:/^[^\'"]+$/'],
            'eff_dt' => ['nullable', 'date'],
            'contr_period' => 'required',
            'exp_dt' => 'nullable|date',
            'serv_ty' => 'required|regex:/^[^\'"]+$/',
        ]);

        $contract->update([
            'branch' => $request->branch,
            'cust_id' => $request->cust_id,
            'nameuser' => $request->nameuser,
            'cae' => $request->cae,
            'unit_head' => $request->unit_head,
            'unit_head_id' => Auth::id(),
            'cpart_pic_lst' => $request->cpart_pic_lst,
            'eff_dt' => $request->eff_dt,
            'contr_period' => $request->contr_period,
            'exp_dt' => $request->exp_dt,
            'serv_ty' => $request->serv_ty,
        ]);


        return redirect()->route('contract.index')->with(['update' => 'Data Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();

        return redirect()->route('contract.index')->with(['delete' => 'Data Successfully Deleted']);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        if (is_null($search) || empty($search)) {
            return redirect()->back()->with(['search' => 'Can not be empty']);
        }

        $contract = Contract::where('cust_id', 'like', '%' . $search . '%')
            ->orWhere('cpart_pic_lst', 'like', '%' . $search . '%')
            ->orWhere('nameuser', 'like', '%' . $search . '%')
            ->orWhere('unit_head', 'like', '%' . $search . '%')
            ->orWhere('cae', 'like', '%' . $search . '%')->paginate(10)->withQueryString();


        if ($contract->isEmpty()) {
            return redirect()->back()->with(['cari' => 'Data not available']);
        }

        return view('contract.index', ['title' => 'Search'], compact('contract'));
    }

    public function import()
    {
        return view('contract.import', ['title' => 'Import Data']);
    }

    public function importProses(Request $request)
    {
        // dd($request->all()); 
        $request->validate([
            'excel_file' => 'required',
            'mimetypes:xlsx/xlx'
        ]);

        try {
            Excel::import(new ContractImport, $request->file('excel_file'));

            return redirect()->route('contract.index')->with(['sukses' => 'Data Imported Successfully']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['import' => 'File must be excel.' . $e->getMessage()]);
        }
    }

    public function export()
    {
        // Jalankan command export database 
        // \Artisan::call('app:export-database');
        $filePath = storage_path('app/backup/contract-cso.sql');
        $fields = ['contr_id', 'cust_id',  'doc_isu_cd', 'eff_dt', 'exp_dt', 'doc_nm', 'doc_ty_cd', 'revw_by', 'cpart_pic_lst',  'revw_on', 'cpart_doc_no', 'cbn_doc_no', 'doc_dt', 'doc_desc', 'cbn_signer', 'cpart_signer', 'doc_subty_cd', 'notes', 'cpart_cd', 'cpart_ty_cd', 'cbn_pic_lst', 'acknow_lst', 'for_rmd_lst', 'auto_rov_fg', 'ntf_upd_dt', 'ntf_ext_note_dt', 'ntf_exp_note_dt', 'file_loc',  'contr_stat_cd', 'any_penalty_fg', 'cre_by', 'cre_tm', 'upd_by', 'upd_tm', 'doc_stat_dt', 'doc_stat_cd',];
        $namaTabel = 'contr_dat';

        $data = DB::table($namaTabel)->select($fields)->get();

        // Cek apakah data berhasil diambil dan debug jika diperlukan
        if ($data->isEmpty()) {
            return redirect()->route('contract.index')->with('error', 'Data tidak ditemukan atau kosong.');
        }

        $isiSql = "INSERT INTO `$namaTabel` (" . implode(', ', $fields) . ") VALUES\n";

        // Loop melalui data dan tambahkan tiap baris sebagai query SQL
        foreach ($data as $row) {

            // Set contr_id menjadi NULL
            $row->contr_id = "NULL";
            $row->doc_isu_cd = "CBN";
            $row->doc_ty_cd = "NULL";
            $row->doc_subty_cd = "NULL";
            $row->doc_desc = "NULL";
            $row->cbn_pic_lst = "NULL";
            $row->cpart_doc_no = "NULL";
            $row->cpart_ty_cd = "NULL";
            $row->cpart_pic_lst = "NULL";
            $row->for_rmd_lst = "NULL";
            $row->contr_stat_cd = "NULL";
            $row->auto_rov_fg = "NULL";
            $row->ntf_upd_dt = "NULL";
            $row->ntf_ext_note_dt = "NULL";
            $row->ntf_exp_note_dt = "NULL";
            $row->file_loc = "NULL";
            $row->upd_by = "NULL";
            $row->upd_tm = "NULL";
            $row->doc_stat_dt = "NULL";
            $row->doc_stat_cd = "NULL";


            // Mapping nilai untuk ditambahkan ke query SQL
            $values = array_map(function ($value) {
                // Jika nilai adalah "NULL" (string), tambahkan NULL tanpa tanda kutip
                if ($value === "NULL") {
                    return "NULL";
                }
                // Jika nilai bukan NULL, tambahkan dengan tanda kutip
                return "'" . addslashes($value) . "'";
            }, (array) $row);

            $isiSql .= "(" . implode(', ', $values) . "),\n";
        }

        File::put($filePath, $isiSql);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return redirect()->route('contract.index')->with('error', 'File tidak ditemukan');
        }

        // // Tentukan jalur untuk menyimpan file SQL
        // $filePath = storage_path('app/backup/contract-cso.sql');
        // $fields = ['eff_dt', 'exp_dt'];
        // $namaTabel = 'contracts';

        // // Ambil hanya field yang diperlukan dari tabel
        // $data = DB::table($namaTabel)->select($fields)->get();



        // // Buat isi file SQL
        // $isiSql = "INSERT INTO `$namaTabel` (" . implode(', ', $fields) . ") VALUES\n";

        // // Loop melalui data dan tambahkan tiap baris sebagai query SQL
        // foreach ($data as $row) {
        //     $values = array_map(function ($value) {
        //         return "'" . addslashes($value) . "'";
        //     }, (array) $row);

        //     $isiSql .= "(" . implode(', ', $values) . "),\n";
        // }

        // // Menghapus koma terakhir dan tambahkan tanda titik koma
        // $isiSql = rtrim($isiSql, ",\n") . ";";

        // // Simpan isi SQL ke file
        // \File::put($filePath, $isiSql);

        // // Cek apakah file berhasil dibuat dan tersedia untuk diunduh
        // if (file_exists($filePath)) {
        //     return response()->download($filePath)->deleteFileAfterSend(true);
        // } else {
        //     return redirect()->route('contract.index')->with('error', 'File tidak ditemukan');
        // }
    }

    public function hapus_semua()
    {
        Schema::disableForeignKeyConstraints();

        Contract::truncate();

        Schema::enableForeignKeyConstraints();

        return redirect()->route('contract.index')->with(['delete-all' => 'All Data Successfully Deleted']);
    }
}
