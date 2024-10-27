<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index')->with([
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('name', $id)->first();
        return view("users.show")->with([
            "user" => $user
        ]);
    }

    public function edit($id)
    {
        //
        $user = User::where('name', $id)->first();
        return view("users.edit")->with([
            "user" => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $user = User::where('name', $id)->first();
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);
        $data = $request->except(['_token', '_method']);
        $user->update($data);
        return redirect()->route("users.index")->with([
            "success" => "User updated successfully"
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('name', $id)->first();
        $user->delete();
        return redirect()->route('users.index')->with([
            "success" => "User deleted successfully"
        ]);
    }
}
