<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Choose;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function index()
    {
        $Chooses = Choose::all();
        

        return view('backend.choose.index', compact('Chooses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.choose.create');
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
            $image->move(public_path('uploads/Choose/'), $imageName);

         
      
           }
           $data = Choose::insert([
            'description' => $request->description,
            'image' => $imageName,
            
            
        ]);

    
          
            return redirect()->route('Chooses_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Chooses = Choose::find($id);
       
        return view('backend.choose.edit', compact('Chooses'));
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
          
            $Chooses = Choose::find($id);
            $Chooses->description = $request->input('description');
            
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/Choose/'), $imageName);
                $Chooses->image = $imageName;
            }
            $Chooses->update();
            return redirect()->route('Chooses_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Chooses = Choose::find($id);
        $Chooses->delete();
        return redirect()->back();
    }
}
