<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\editing;

class EditingScreenController extends Controller
{
    public function editing()
    {
        return view('editing.editing');
    }
}