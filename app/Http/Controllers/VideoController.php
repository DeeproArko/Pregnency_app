<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        

        return view('backend.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //   return $mmainLead=$request->mainLead;
        //   return $mmainLead=$request->mainLead;
       
          
            
        
           $data = Video::insert([
            'video' => $request->video,
          
            
            
        ]);

    
          
            return redirect()->route('videos_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $videos = Video::find($id);
       
        return view('backend.videos.edit', compact('videos'));
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
          
            $videos = Video::find($id);
            $videos->video = $request->input('video');
        

           
            $videos->update();
            return redirect()->route('videos_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $videos = Video::find($id);
        $videos->delete();
        return redirect()->back();
    }
}
