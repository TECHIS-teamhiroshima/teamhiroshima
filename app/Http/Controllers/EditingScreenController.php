<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditingScreenController extends Controller
{
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editing()
    {
        return view('editings.editing');
    }
}
