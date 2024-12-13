<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('id', '<', 100)->paginate(10);
        return view('users.index', compact('users'), ['title' => 'View Data Users']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create', ['title' => 'Create User']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'regex:/^[^\'"]+$/'],
            'username' => 'required|regex:/^[a-zA-Z0-9]+$/|regex:/^[^\'"]+$/',
            'email' => 'required|email|regex:/^[\w]+@[a-zA-Z0-9.-]+\.(?:[a-zA-Z]{2,})$/|regex:/^[^\'"]+$/',
            'password' => 'required|min:8|regex:/^[^\'"]+$/',
            'type' => 'required|integer|in:1,2,3',
        ]);

        // dd($request);

        Users::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
        ]);

        return redirect()->route('users.index')->with(['user' => 'User successfully added']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $user)
    {
        return view('users.edit', compact('user'), ['title' => 'Edit Data Users']);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Users $users, $id)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'regex:/^[^\'"]+$/'],
            'username' => 'required|regex:/^[a-zA-Z0-9]+$/|regex:/^[^\'"]+$/',
            'email' => 'required|email|regex:/^[\w]+@[a-zA-Z0-9.-]+\.(?:[a-zA-Z]{2,})$/|regex:/^[^\'"]+$/',
            'password' => 'nullable|min:8|regex:/^[^\'"]+$/',
            'type' => 'required|integer|in:1,2,3',
        ]);

        $users = Users::findOrFail($id);
        Users::Where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'type' => $request->type,
            'password' => $request->password ? Hash::make($request->password) : $users->password,
        ]);

        return redirect()->route('users.index')->with(['edit' => 'Data Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with(['delete' => 'Data Successfully Deleted']);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        if (is_null($search) || empty($search)) {
            return redirect()->back()->with(['search' => 'Search can not be empty']);
        }

        $users = Users::where('name', 'like', '%' . $search . '%')->orWhere('username', 'like', '%' . $search . '%')->paginate(10);

        if ($users->isEmpty()) {
            return redirect()->back()->with(['cari' => 'Data not available']);
        }

        return view('users.index', ['title' => 'Search'], compact('users'));


        // ['contract' => $contract], ['title' => 'Search'] 
    }
}
