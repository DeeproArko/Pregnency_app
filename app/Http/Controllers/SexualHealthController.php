<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\SexualHealth;
use Illuminate\Http\Request;

class SexualHealthController extends Controller
{
    public function index()
    {
        $health = SexualHealth::all();
        

        return view('backend.health.index', compact('health'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.health.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $data = SexualHealth::create($request->all());
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/health/'), $imageName);
    
                $data->image = $imageName;
                $data->save();
               }
          
           
            return redirect()->route('health_index');
        }catch(Exception $e){
            return redirect()->route('health_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $health = SexualHealth::find($id);
        return view('backend.health.edit', compact('health'));
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
          
            $health = SexualHealth::find($id);
            $health->title = $request->input('title');
            $health->description = $request->input('description');
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/health/'), $imageName);
                $health->image = $imageName;
            }
            $health->update();
            return redirect()->route('health_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $health = SexualHealth::find($id);
        $health->delete();
        return redirect()->back();
    }
}
