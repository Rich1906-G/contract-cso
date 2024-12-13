<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaeController extends Controller
{
    public function cae()
    {
        $cae = Auth::user()->name;
        $contractCAE = Contract::where('cae', $cae, $cae)->paginate(10);
        return view('cae.index', compact('contractCAE'), ['title' => 'View Contract Cae']);
    }

    public function mandiori(Request $request)
    {
        $mandiori = $request->input('search');
        if (is_null($mandiori) || empty($mandiori)) {
            return redirect()->back()->with(['search' => 'Can not be empty']);
        }
        $contractCAE = Contract::where('cpart_pic_lst', 'like', '%' . $mandiori . '%')->orWhere('eff_dt', 'like', '%' . $mandiori . '%')->paginate(10)->withQueryString();

        if ($contractCAE->isEmpty()) {
            return redirect()->back()->with(['mandiori' => 'Data not available']);
        }

        return view('cae.index', ['title' => 'Search'], compact('contractCAE'));
    }
}
