<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Ambulance;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function index()
    {
        $ambulances = Ambulance::all();
        

        return view('backend.ambulance.index', compact('ambulances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.ambulance.create');
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
            $image->move(public_path('uploads/ambulance/'), $imageName);

         
      
           }
           $data = Ambulance::insert([
            'name' => $request->name,
            'location' => $request->location,
            'phone' => $request->phone,
            'image' => $imageName,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            
        ]);

    
          
            return redirect()->route('ambulances_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ambulances = Ambulance::find($id);
       
        return view('backend.ambulance.edit', compact('ambulances'));
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
          
            $ambulances = Ambulance::find($id);
            $ambulances->name = $request->input('name');
            $ambulances->location	 = $request->input('location');
            $ambulances->phone	 = $request->input('phone');
            $ambulances->slug = strtolower(str_replace(' ', '-', $request->input('name')));
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/ambulance/'), $imageName);
                $ambulances->image = $imageName;
            }
            $ambulances->update();
            return redirect()->route('ambulances_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ambulances = Ambulance::find($id);
        $ambulances->delete();
        return redirect()->back();
    }
}
