<?php

namespace App\Http\Controllers;

use App\Models\DocIsu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DocIsuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docIsu = DocIsu::all();

        return view('docIss.index', compact('docIsu'), ['title' => 'View Data Document Issue']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docIss.create', ['title' => 'Create Data Document']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'doc_isu_cd' => 'required',
            'doc_isu_nm' => 'required',
            'doc_isu_ord' => 'required',
            'doc_isu_val' => 'required',
            'doc_isu_desc' => 'nullable',
            'cre_by' => 'required',
            'cre_tm' => 'required|date',
            'upd_by' => 'nullable',
            'upd_tm' => 'nullable|date',
        ]);


        DocIsu::create([
            'doc_isu_cd' => $request->doc_isu_cd,
            'doc_isu_nm' => $request->doc_isu_nm,
            'doc_isu_ord' => $request->doc_isu_ord,
            'doc_isu_val' => $request->doc_isu_val,
            'doc_isu_desc' => $request->doc_isu_desc,
            'cre_by' => $request->cre_by,
            'cre_tm' => $request->cre_tm,
            'upd_by' => $request->upd_by,
            'upd_tm' => $request->upd_tm,
        ]);

        return redirect()->route('document.index')->with(['Sukses', 'Data berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(DocIsu $docIsu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($docIsu)
    {
        $docIsu = DocIsu::where('doc_isu_cd', $docIsu)->first();
        // dd($data);

        return view('docIss.edit', compact('docIsu'), ['title' => 'Edit Document']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $docIsu)
    {

        $request->validate([
            'doc_isu_cd' => 'required',
            'doc_isu_nm' => 'required',
            'doc_isu_ord' => 'required',
            'doc_isu_val' => 'required',
            'doc_isu_desc' => 'required',
            'cre_by' => 'required',
            'cre_tm' => 'nullable|date',
            'upd_by' => 'required',
            'upd_tm' => 'nullable|date',
        ]);

        $docIsu = DocIsu::where('doc_isu_cd', $docIsu)->firstOrFail();

        $docIsu->doc_isu_cd = $request['doc_isu_cd'];
        $docIsu->doc_isu_nm = $request['doc_isu_nm'];
        $docIsu->doc_isu_ord = $request['doc_isu_ord'];
        $docIsu->doc_isu_val = $request['doc_isu_val'];
        $docIsu->doc_isu_desc = $request['doc_isu_desc'];
        $docIsu->cre_by = $request['cre_by'];
        $docIsu->cre_tm = $request['cre_tm'];
        $docIsu->upd_by = $request['upd_by'];
        $docIsu->upd_tm = $request['upd_tm'];
        $docIsu->save();

        // dd($request);
        return redirect()->route('document.index')->with(['Berhasil' => 'Data Berhasil Diudate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($docIsu)
    {
        // $docIsu->delete();
        $docIsu = DocIsu::where('doc_isu_cd', $docIsu)->first();

        if ($docIsu) {
            $docIsu->delete();
            return redirect()->route('document.index')->with(['Sukses' => 'Data B erhasil Dihapus']);
        }
        return redirect()->back()->with('Salah Tolol');
    }
}
