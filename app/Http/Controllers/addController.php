<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\add;

class addController extends Controller
{
    public function add()
    {
        return view('add.add');
    }
}