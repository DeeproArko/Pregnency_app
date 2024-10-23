<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pregnency;
use Illuminate\Http\Request;

class PregnencyController extends Controller
{
    public function index()
    {
        $pregnency = Pregnency::all();
        

        return view('backend.pregnency.index', compact('pregnency'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.pregnency.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $data = Pregnency::create($request->all());
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/pregnency/'), $imageName);
    
                $data->image = $imageName;
                $data->save();
               }
          
           
            return redirect()->route('pregnency_index');
        }catch(Exception $e){
            return redirect()->route('pregnency_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pregnency = Pregnency::find($id);
        return view('backend.pregnency.edit', compact('pregnency'));
    }

    public function show($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
          
            $pregnency = Pregnency::find($id);
            $pregnency->title = $request->input('title');
            $pregnency->description = $request->input('description');
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/pregnency/'), $imageName);
                $pregnency->image = $imageName;
            }
            $pregnency->update();
            return redirect()->route('pregnency_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pregnency = Pregnency::find($id);
        $pregnency->delete();
        return redirect()->back();
    }
}
