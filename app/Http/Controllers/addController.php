<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\add;

use Illuminate\Support\Facades\Auth;



class AddController extends Controller
{
    public function add()
    {
        $id =  Auth::id();
        return view('add.add', [
            "user_id" => $id,
        ]);
    }
}