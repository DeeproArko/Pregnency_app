<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Articles;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        

        return view('backend.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
        

            $data = Articles::create($request->all());
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/article/'), $imageName);
    
                $data->image = $imageName;
                $data->save();
               }
          
           
            return redirect()->route('articles_index');
        }catch(Exception $e){
            return redirect()->route('articles_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $articles = Articles::find($id);
        return view('backend.article.edit', compact('articles'));
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
          
            $articles = Articles::find($id);
            $articles->title = $request->input('title');
            $articles->description = $request->input('description');
            if($request->hasFile('image'))
            {
               
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/article/'), $imageName);
                $articles->image = $imageName;
            }
            $articles->update();
            return redirect()->route('articles_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $articles = Articles::find($id);
        $articles->delete();
        return redirect()->back();
    }
}
