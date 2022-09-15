<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\item;

class AddController extends Controller
{
    public function add()
    {
        return view('add.add');
    }
}
