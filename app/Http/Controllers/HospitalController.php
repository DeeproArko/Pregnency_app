<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        

        return view('backend.hospital.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //   return $mmainLead=$request->mainLead;
        //   return $mmainLead=$request->mainLead;
       
          
            
             if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/hospital/'), $imageName);

         
      
           }
           $data = Hospital::insert([
            'name' => $request->name,
            'location' => $request->location,
            'phone' => $request->phone,
            'image' => $imageName,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            
        ]);

    
          
            return redirect()->route('hospitals_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hospitals = Hospital::find($id);
       
        return view('backend.hospital.edit', compact('hospitals'));
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
          
            $hospitals = Hospital::find($id);
            $hospitals->name = $request->input('name');
            $hospitals->location	 = $request->input('location');
            $hospitals->phone	 = $request->input('phone');
            $hospitals->slug = strtolower(str_replace(' ', '-', $request->input('name')));
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/hospital/'), $imageName);
                $hospitals->image = $imageName;
            }
            $hospitals->update();
            return redirect()->route('hospitals_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hospitals = Hospital::find($id);
        $hospitals->delete();
        return redirect()->back();
    }
}
