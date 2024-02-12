<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //   return "prueba tax index";
       //return view('admin.categories.index', compact('categories'));
       return view('tax.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tax.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //   return $request->all(); 
          $request ->validate([
            'name' => 'required|string|max:255'
           ]);
           Tax::create($request->all());
           //session()->flash('flash.banner', 'The category is Save');
          // session()->flash('flash.bannerStyle', 'success');
           return redirect()->route('tax.index')->with('info', 'The category is Save');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tax $tax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tax $tax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tax $tax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tax $tax)
    {
        //
    }
}
