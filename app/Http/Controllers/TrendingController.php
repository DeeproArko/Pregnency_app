<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Trending;
use Illuminate\Http\Request;

class TrendingController extends Controller
{
    public function index()
    {
        $trending = Trending::all();
        

        return view('backend.trending.index', compact('trending'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.trending.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $data = Trending::create($request->all());
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/trending/'), $imageName);
    
                $data->image = $imageName;
                $data->save();
               }
          
           
            return redirect()->route('trending_index');
        }catch(Exception $e){
            return redirect()->route('trending_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trending = Trending::find($id);
        return view('backend.trending.edit', compact('trending'));
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
          
            $trending = Trending::find($id);
            $trending->title = $request->input('title');
            $trending->description = $request->input('description');
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/trending/'), $imageName);
                $trending->image = $imageName;
            }
            $trending->update();
            return redirect()->route('trending_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trending = Trending::find($id);
        $trending->delete();
        return redirect()->back();
    }
}
