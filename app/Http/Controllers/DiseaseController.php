<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Disease;
use App\Models\Navbar;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::all();
        

        return view('backend.disease.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $navs= Navbar::all();
        return view('backend.disease.create', compact('navs'));
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
            $image->move(public_path('uploads/disease/'), $imageName);

         
      
           }
           $data = Disease::insert([
            'title' => $request->title,
            'description' => $request->description,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category)),
            'MainLead' => $request->MainLead,
            'subLead' => $request->subLead,
            'sectionLead' => $request->sectionLead,
            'short_description' => $request->short_description,
            'image' => $imageName,
            'slug' => strtolower(str_replace(' ', '-', $request->title)),
            
        ]);

    
          
            return redirect()->route('diseases_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $diseases = Disease::find($id);
        $navs= Navbar::all();
        return view('backend.disease.edit', compact('diseases','navs'));
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
          
            $diseases = Disease::find($id);
            $diseases->title = $request->input('title');
            $diseases->description = $request->input('description');
            $diseases->short_description	 = $request->input('short_description');
            $diseases->category = $request->input('category');
            $diseases->MainLead = $request->input('MainLead');
            $diseases->subLead = $request->input('subLead');
            $diseases->sectionLead = $request->input('sectionLead');
            $diseases->short_description = $request->input('short_description');
            $diseases->slug = strtolower(str_replace(' ', '-', $request->input('title')));
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/disease/'), $imageName);
                $diseases->image = $imageName;
            }
            $diseases->update();
            return redirect()->route('diseases_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $diseases = Disease::find($id);
        $diseases->delete();
        return redirect()->back();
    }
}
