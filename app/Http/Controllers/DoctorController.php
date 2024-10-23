<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        

        return view('backend.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.doctor.create');
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
            $image->move(public_path('uploads/doctor/'), $imageName);

         
      
           }
           $data = Doctor::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'location' => $request->location,
            'phone' => $request->phone,
            'popular' => $request->popular,
            'image' => $imageName,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            
        ]);

    
          
            return redirect()->route('doctors_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctors = Doctor::find($id);
       
        return view('backend.doctor.edit', compact('doctors'));
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
          
            $doctors = Doctor::find($id);
            $doctors->name = $request->input('name');
            $doctors->designation = $request->input('designation');
            $doctors->location	 = $request->input('location');
            $doctors->phone	 = $request->input('phone');
            $doctors->popular	 = $request->input('popular');
            $doctors->slug = strtolower(str_replace(' ', '-', $request->input('name')));
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/doctor/'), $imageName);
                $doctors->image = $imageName;
            }
            $doctors->update();
            return redirect()->route('doctors_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctors = Doctor::find($id);
        $doctors->delete();
        return redirect()->back();
    }
}
