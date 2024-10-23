<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        

        return view('backend.feedbacks.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.feedbacks.create');
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
            $image->move(public_path('uploads/feedback/'), $imageName);

         
      
           }
           $data = Feedback::insert([
          
            'image' => $imageName,
          
            
        ]);

    
          
            return redirect()->route('feedbacks_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $feedbacks = Feedback::find($id);
       
        return view('backend.feedbacks.edit', compact('feedbacks'));
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
          
            $feedbacks = Feedback::find($id);
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/feedback/'), $imageName);
                $feedbacks->image = $imageName;
            }
            $feedbacks->update();
            return redirect()->route('feedbacks_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $feedbacks = Feedback::find($id);
        $feedbacks->delete();
        return redirect()->back();
    }
}
