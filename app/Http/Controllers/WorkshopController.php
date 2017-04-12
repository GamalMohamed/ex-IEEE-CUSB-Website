<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workshop;
class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response=Workshop::all();
        return response()->json($response,200);
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
            'name'=>'required',
            //TODO: to be added after committee table added
            //'committeeId'=>'required|integer',
            'description'=>'required',
            'tag'=>'required',
            'numberOfSeats'=>'required|min:0',
            'startDate'=>'required',
            'endDate'=>'required',
            'numberOfParticipants'=>'required|integer',
            'isSponsored'=>'required'
        ]);
        $isSponsored=0;
        if($request->input('isSponsored')=="on")
        {
            $isSponsored=1;
        }
        try{
            $workshop= new Workshop([
                "name"=>$request->input('name'),
                //TODO: to be added after committee table added
                //"committeeId"=>$request->input('committeeId'),

                "description"=>$request->input('description'),
                "tag"=>$request->input('tag'),
                "numberOfSeats"=>$request->input('numberOfSeats'),
                "startDate"=>$request->input('startDate'),
                "endDate"=>$request->input('endDate'),
                "numberOfParticipants"=>$request->input('numberOfParticipants'),
                "isSponsored"=>$isSponsored


            ]);
            $workshop->save();
        }
        catch(Exception $e){
            return response()->json($e->getMessage(),200);
        }
        return response()->json($request->input(),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response=Workshop::find($id);
        return response()->json($response,200);
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
