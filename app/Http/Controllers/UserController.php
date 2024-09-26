<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("signup");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $valadatedData =  $request->validate([
            "name"=> "required|string|max:50",
            "password"=> "required|string|min:4",
            "email"=> "required|string|unique:users,email",

        ]);


        $user = User::create($valadatedData);
        if($user){

            Auth::login($user);


            $userdetail = $user->fresh();


            return redirect()->route("dashboard")->with("success",$userdetail);
        }else{
            return redirect()->back()->with(key: "error",value: "Your form is summited succesfully");

        }




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
