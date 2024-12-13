<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitHeadController extends Controller
{
    public function unitHead()
    {
        $user = Auth::user()->name;
        $contractUser = Contract::where('unit_head', $user, $user)->paginate(10);
        return view('unit_head.index', compact('contractUser'), ['title' => 'View Contract Unit Head']);
    }

    public function cari(Request $request)
    {
        $cari = $request->input('search');
        if (is_null($cari) || empty($cari)) {
            return redirect()->back()->with(['search' => 'Can   not be empty']);
        }

        $contractUser = Contract::where('cpart_pic_lst', 'like', '%' . $cari . '%')->orWhere('eff_dt', 'like', '%' . $cari . '%')->orWhere('cae', 'like', '%' . $cari . '%')->paginate(10)->withQueryString();

        if ($contractUser->isEmpty()) {
            return redirect()->back()->with(['cari' => 'Data not available']);
        }

        return view('unit_head.index', ['title' => 'Search'], compact('contractUser'));
    }
}
