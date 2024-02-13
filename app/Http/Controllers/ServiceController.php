<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
    //   return "prueba tax index";
       //return view('admin.categories.index', compact('categories'));
       return view('service.index');
    }
}
