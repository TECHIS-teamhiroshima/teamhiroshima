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


public function store(Request $request)
{
    $document = $request->document;
    // 画像を"storage/app/public"に保存
    $document->store('public');
}
}