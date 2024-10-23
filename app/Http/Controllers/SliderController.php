<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        

        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $data = Slider::create($request->all());
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/slider/'), $imageName);
    
                $data->image = $imageName;
                $data->save();
               }
          
           
            return redirect()->route('sliders_index');
        }catch(Exception $e){
            return redirect()->route('sliders_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sliders = Slider::find($id);
        return view('backend.slider.edit', compact('sliders'));
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
          
            $sliders = Slider::find($id);
            $sliders->title = $request->input('title');
            $sliders->description = $request->input('description');
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/slider/'), $imageName);
                $sliders->image = $imageName;
            }
            $sliders->update();
            return redirect()->route('sliders_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sliders = Slider::find($id);
        $sliders->delete();
        return redirect()->back();
    }
}
