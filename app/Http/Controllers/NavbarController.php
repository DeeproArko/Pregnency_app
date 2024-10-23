<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index()
    {
        $navs = Navbar::all();
        

        return view('backend.nav.index', compact('navs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.nav.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $data = Navbar::insert([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '-', $request->name)),
            ]);
            
          
           
            return redirect()->route('navs_index');
        }catch(Exception $e){
            return redirect()->route('navs_create')->withErrors($e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $navs = Navbar::find($id);
        return view('backend.nav.edit', compact('navs'));
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
          
            $navs = Navbar::find($id);
            $navs->name = $request->input('name');
            $navs->slug = strtolower(str_replace(' ', '-', $request->input('name')));

           
            $navs->update();
            return redirect()->route('navs_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $navs = Navbar::where('slug', $slug)->first();
        $navs->delete();
        return redirect()->back();
    }
}
