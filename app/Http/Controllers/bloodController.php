<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blood;
use Illuminate\Http\Request;

class bloodController extends Controller
{
    public function index()
    {
        $bloods = Blood::all();
        

        return view('backend.blood.index', compact('bloods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.blood.create');
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
            $image->move(public_path('uploads/blood/'), $imageName);

         
      
           }
           $data = Blood::insert([
            'name' => $request->name,
            'location' => $request->location,
            'phone' => $request->phone,
            'image' => $imageName,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            
        ]);

    
          
            return redirect()->route('bloods_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bloods = Blood::find($id);
       
        return view('backend.blood.edit', compact('bloods'));
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
          
            $bloods = Blood::find($id);
            $bloods->name = $request->input('name');
            $bloods->location	 = $request->input('location');
            $bloods->phone	 = $request->input('phone');
            $bloods->slug = strtolower(str_replace(' ', '-', $request->input('name')));
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/blood/'), $imageName);
                $bloods->image = $imageName;
            }
            $bloods->update();
            return redirect()->route('bloods_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bloods = Blood::find($id);
        $bloods->delete();
        return redirect()->back();
    }
}
