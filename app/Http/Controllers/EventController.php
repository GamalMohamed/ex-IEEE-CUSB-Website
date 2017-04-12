<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response=Event::all();
        return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $this->validate($request,[
            'name'=>'required',
            'date'=>'required',
            'place'=>'required',
            'description'=>'required',
            'tag'=>'required',
            'isFeatured'=>'required|max:3',
            'sponsors'=>'required',
            'host'=>'required'
        ]);
    }
        catch(Exception $e){
        return response()->json($e->getMessage(),200);
    }
        $isFeatured=0;
        if($request->input('isFeatured')=="on"){
            $isFeatured=1;
        }

        try{
        $event= new Event([
           "name"=>$request->input('name'),
            "date"=>$request->input('date'),
            "place"=>$request->input('place'),
            "description"=>$request->input('description'),
            "tag"=>$request->input('tag'),
            "isFeatured"=>$isFeatured,
            "sponsors"=>$request->input('sponsors'),
            "host"=>$request->input('host')

        ]);
          $event->save();
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
        $response=Event::find($id);
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
