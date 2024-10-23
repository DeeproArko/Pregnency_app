<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Stomach;
use Illuminate\Http\Request;

class StomachController extends Controller
{
    public function index()
    {
        $stomach = Stomach::all();
        

        return view('backend.stomach.index', compact('stomach'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.stomach.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $data = Stomach::create($request->all());
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/stomach/'), $imageName);
    
                $data->image = $imageName;
                $data->save();
               }
          
           
            return redirect()->route('stomach_index');
        }catch(Exception $e){
            return redirect()->route('stomach_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stomach = Stomach::find($id);
        return view('backend.stomach.edit', compact('stomach'));
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
          
            $stomach = Stomach::find($id);
            $stomach->title = $request->input('title');
            $stomach->description = $request->input('description');
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/stomach/'), $imageName);
                $stomach->image = $imageName;
            }
            $stomach->update();
            return redirect()->route('stomach_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stomach = Stomach::find($id);
        $stomach->delete();
        return redirect()->back();
    }
}
