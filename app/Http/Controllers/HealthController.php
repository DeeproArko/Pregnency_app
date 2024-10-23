<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Health;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        $healths = Health::all();
        

        return view('backend.healths.index', compact('healths'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.healths.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $data = Health::create($request->all());
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/healths/'), $imageName);
    
                $data->image = $imageName;
                $data->save();
               }
          
           
            return redirect()->route('healths_index');
        }catch(Exception $e){
            return redirect()->route('healths_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $healths = Health::find($id);
        return view('backend.healths.edit', compact('healths'));
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
          
            $healths = Health::find($id);
            $healths->title = $request->input('title');
            $healths->description = $request->input('description');
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/healths/'), $imageName);
                $healths->image = $imageName;
            }
            $healths->update();
            return redirect()->route('healths_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $healths = Health::find($id);
        $healths->delete();
        return redirect()->back();
    }
}
