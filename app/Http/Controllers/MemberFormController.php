<?php

namespace App\Http\Controllers;

use App\MemberForm;
use Illuminate\Http\Request;

class MemberFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {


        $this->validate($request,[
            'nat_id'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required|max:1',
            'age'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'university'=>'required',
            'major'=>'required'
        ]);
        $memberForm= new MemberForm();
        $memberForm->nat_id=$request->input('nat_id');
        $memberForm->first_name=$request->input('first_name');
        $memberForm->last_name=$request->input('last_name');
        $memberForm->age=$request->input('age');
        $memberForm->gender=$request->input('gender');
        $memberForm->mobile=$request->input('mobile');
        $memberForm->email=$request->input('email');
        $memberForm->university=$request->input('university');
        $memberForm->major=$request->input('major');
        $memberForm->save();




        $response = [
            'message' => 'registeration completed',
            'form'=>$memberForm,
            'name'=>$memberForm->first_name



        ];
        return response()->json($response, 201);
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
