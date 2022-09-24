<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\detail;

class DetailController extends Controller
{
    public function detail()
    {
        return view('detail.detail');
    }
}