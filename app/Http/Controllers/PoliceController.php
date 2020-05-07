<?php

namespace App\Http\Controllers;

use App\Police;
use Illuminate\Http\Request;
use Toastr;

class PoliceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('welcome');
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate police field details
        $data = request()->validate([
            'name' => 'required',
            'force_number' => 'required',
            'station' => 'required',
        ]);      
        $police = Police::create($data);
        return redirect()->route('show')->with('police', $police);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Police $police)
    {   $police = Police::latest()->get();
        return view('show' )->with('police', $police);
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
        $police = Police::findOrFail($id);
        return view('edit',compact('police'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    { //validate police field details
        $request->validate([
            'name' => 'required',
            'force_number' => 'required',
            'station' => 'required',
        ]);      
       $police = Police::findOrFail($id);
       $police->name =  $request->get('name');
       $police->force_number = $request->get('force_number');
       $police->station = $request->get('station');
       $police->save();
      
       return view('welcome')->with('success', 'Police updated!');

      
        // return view('show' ,compact('police',$police));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $police = Police::findOrFail($id);
        $police->delete();
        return view('show')->with('success', 'Police deleted!');
    }
}
