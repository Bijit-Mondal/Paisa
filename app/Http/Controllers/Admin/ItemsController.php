<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}
