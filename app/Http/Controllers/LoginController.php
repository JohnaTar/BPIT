<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('layouts.pages.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(),[
            'id_card'=>'required|min:13|numeric|string|unique:users',
            'username'=>'required|min:6|string|unique:users',
            'password'=>'required|min:6|string',
            'password_confirmation' =>'required|min:6|same:password',
            'email' => 'required|string|email|max:255|unique:users',
            'positionapplied' =>'required|string',
            'expectedsalary' =>'required|numeric|string',
            'provincedistrict' =>'required|string',
            'firstname'=>'required|string',
            'englishname'=>'required|string',
            'dateofbirth'=>'required|string',
            'age'=>'required|string|numeric',
            'gender'=>'required',
            'tall'=>'required|string|numeric',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
