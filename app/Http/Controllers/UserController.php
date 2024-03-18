<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = user::all();
        return view('Home',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users",
            "age" => "required|numeric",
            "city" => "required|alpha",
          ]);
       user::create([
            "name" => $request->name,
            "email" => $request->email,
            "age" => $request->age,
            "city" => $request->city,
        ]);
        return redirect()->route('user.index')->with('key','New data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = user::find($id);
        return view ('view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = user::find($id);
        return view ('update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users",
            "age" => "required|numeric",
            "city" => "required|alpha",
          ]);


       $user = user::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->age = $request->age;
            $user->city = $request->city;
        
        $user->save();
        return redirect()->route('user.index')->with('update','your data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('delete','your data deleted successfully');
    }
}
