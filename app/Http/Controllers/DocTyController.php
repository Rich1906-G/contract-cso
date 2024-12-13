<?php

namespace App\Http\Controllers;

use App\Models\DocTy;
use Illuminate\Http\Request;

class DocTyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docTy = DocTy::all();
        return view('docTy.index', compact('docTy'), ['title' => 'Data Document Type']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docTy.create', ['title' => 'Create Document Type']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'doc_ty_cd' => 'required',
            'doc_ty_nm' => 'required',
            'doc_ty_ord' => 'required',
            'doc_ty_desc' => 'nullable',
            'cre_by' => 'required',
            'cre_tm' => 'required|date',
            'upd_by' => 'nullable',
            'upd_tm' => 'nullable|date',
        ]);

        DocTy::create([
            'doc_ty_cd' => $request->doc_ty_cd,
            'doc_ty_nm' => $request->doc_ty_nm,
            'doc_ty_ord' => $request->doc_ty_ord,
            'doc_ty_desc' => $request->doc_ty_desc,
            'cre_by' => $request->cre_by,
            'cre_tm' => $request->cre_tm,
            'upd_by' => $request->upd_by,
            'upd_tm' => $request->upd_tm,
        ]);

        return redirect()->route('documentType.index')->with(['Sukses' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(DocTy $docTy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($docTy)
    {
        $docTy = DocTy::where('doc_ty_cd', $docTy)->first();
        // dd($docTy);

        return view('docTy.edit', compact('docTy'), ['title' => 'Edit Data Document Type']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $docTy)
    {
        $request->validate([
            'doc_ty_cd' => 'required',
            'doc_ty_nm' => 'required',
            'doc_ty_ord' => 'required',
            'doc_ty_desc' => 'nullable',
            'cre_by' => 'required',
            'cre_tm' => 'required|date',
            'upd_by' => 'nullable',
            'upd_tm' => 'nullable|date',
        ]);

        $docTy = DocTy::where('doc_ty_cd', $docTy)->firstOrfail();

        $docTy->doc_ty_cd = $request['doc_ty_cd'];
        $docTy->doc_ty_nm = $request['doc_ty_nm'];
        $docTy->doc_ty_ord = $request['doc_ty_ord'];
        $docTy->doc_ty_desc = $request['doc_ty_desc'];
        $docTy->cre_by = $request['cre_by'];
        $docTy->cre_tm = $request['cre_tm'];
        $docTy->upd_by = $request['upd_by'];
        $docTy->upd_tm = $request['upd_tm'];
        $docTy->save();

        return redirect()->route('documentType.index')->with(['Sukses' => 'Data Berhasil Diedit']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocTy $docTy)
    {
        $docTy->DELETE();

        return redirect()->route('documentType.index')->with(['Sukses' => 'Data Berhasil Dihapus']);
    }
}
