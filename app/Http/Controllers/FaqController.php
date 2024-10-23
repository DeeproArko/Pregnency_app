<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        

        return view('backend.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('backend.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //   return $mmainLead=$request->mainLead;
        //   return $mmainLead=$request->mainLead;
       
          
            
        
           $data = Faq::insert([
            'question' => $request->question,
            'answer' => $request->answer,
            
            
        ]);

    
          
            return redirect()->route('faqs_index');
       
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faqs = Faq::find($id);
       
        return view('backend.faq.edit', compact('faqs'));
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
          
            $faqs = Faq::find($id);
            $faqs->question = $request->input('question');
            $faqs->answer = $request->input('answer');

           
            $faqs->update();
            return redirect()->route('faqs_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faqs = Faq::find($id);
        $faqs->delete();
        return redirect()->back();
    }
}
