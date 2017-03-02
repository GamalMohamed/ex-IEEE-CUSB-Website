<?php

namespace App\Http\Controllers;

use App\ParticipantForm;
use Illuminate\Http\Request;

class ParticipantFormController extends Controller
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
            'nat_id'=>'required|numeric',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required|max:1',
            'age'=>'required|numeric',
            'mobile'=>'required|numeric',
            'email'=>'required|email',
            'university'=>'required',
            'major'=>'required'
        ]);
        $participantRequest= new ParticipantForm();
        $participantRequest->nat_id=$request->input('nat_id');
        $participantRequest->first_name=$request->input('first_name');
        $participantRequest->last_name=$request->input('last_name');
        $participantRequest->age=$request->input('age');
        $participantRequest->gender=$request->input('gender');
        $participantRequest->mobile=$request->input('mobile');
        $participantRequest->email=$request->input('email');
        $participantRequest->university=$request->input('university');
        $participantRequest->major=$request->input('major');
        $participantRequest->save();




        $response = [
            'message' => 'registeration completed',
            'form'=>$participantRequest,
            'name'=>$participantRequest->first_name



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
