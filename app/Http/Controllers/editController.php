<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\edit;

class editController extends Controller
{
    public function edit()
    {
        return view('edit.edit');
    }
}