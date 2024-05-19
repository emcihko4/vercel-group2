<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserModel::all();
        return view ('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view ("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        UserModel::create($input);
        return redirect('users')->with('flash_message', 'User Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users = UserModel::find($id);
        return view('admin.users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = UserModel::find($id);
        return view('admin.users.edit')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = UserModel::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('users')->with('flash_message', 'Teacher Updated!'); 
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UserModel::destroy($id);
        return redirect('users')->with('flash_message', 'Teacher deleted!'); 
    }
}
