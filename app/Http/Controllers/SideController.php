<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Side;
use Illuminate\Http\Request;

class SideController extends Controller
{
    public function index()
    {
        $sides = Side::all();
        

        return view('backend.side.index', compact('sides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.side.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $data = Side::create($request->all());
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/side/'), $imageName);
    
                $data->image = $imageName;
                $data->save();
               }
          
           
            return redirect()->route('sides_index');
        }catch(Exception $e){
            return redirect()->route('sides_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sides = Side::find($id);
        return view('backend.side.edit', compact('sides'));
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
          
            $sides = Side::find($id);
            $sides->title = $request->input('title');
            $sides->description = $request->input('description');
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/side/'), $imageName);
                $sides->image = $imageName;
            }
            $sides->update();
            return redirect()->route('sides_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sides = Side::find($id);
        $sides->delete();
        return redirect()->back();
    }
}
