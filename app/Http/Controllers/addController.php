<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\add;

class addController extends Controller
{
    // addージの表示
    public function add()
    {
        return view('add.add');
    }

    // 投稿された内容を表示するページ
    public function create(Request $request) {

        // 投稿内容の受け取って変数に入れる
        $name = $request->input('name');
        $type = $request->input('type');

        // 変数をビューに渡す
        return view('add.blade.php')->with([
            "name" => $name,
            "type"  => $type,
        ]);
    }

}