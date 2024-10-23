<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Tps;
use Illuminate\Http\Request;

class TpsController extends Controller
{
    public function index()
    {
        $tips = Tps::all();
        

        return view('backend.tips.index', compact('tips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.tips.create');
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
            $image->move(public_path('uploads/tip/'), $imageName);

         
      
           }
           $data = Tps::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'slug' => strtolower(str_replace(' ', '-', $request->title)),
            
        ]);

    
          
            return redirect()->route('tips_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tips = Tps::find($id);
       
        return view('backend.tips.edit', compact('tips'));
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
          
            $tips = Tps::find($id);
            $tips->title = $request->input('title');
            $tips->description	 = $request->input('description');
           
            $tips->slug = strtolower(str_replace(' ', '-', $request->input('title')));
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/tip/'), $imageName);
                $tips->image = $imageName;
            }
            $tips->update();
            return redirect()->route('tips_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tips = Tps::find($id);
        $tips->delete();
        return redirect()->back();
    }
}
