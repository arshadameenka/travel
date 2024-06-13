<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){
        return view('admin.list-package');
    }
    public function create()  {
        return view('admin.add-package');
    }
    public function store()  {
        
    }
    public function show()  {
        return view('admin.show-package');
    }
    public function edit()  {
        return view('admin.add-package');
    }
    public function update()  {
        
    }
    public function destroy()  {
        
    }
}
