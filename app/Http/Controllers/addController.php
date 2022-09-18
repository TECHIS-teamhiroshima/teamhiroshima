<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\add;

class AddController extends Controller
{
    public function add()
    {
        return view('add.add');
    }
}


// class AddController extends Controller
// {
//     public function upload(Request $request)
//     {
//         // ディレクトリ名
//         $dir = 'sample';

//         // アップロードされたファイル名を取得
//         $file_name = $request->file('image')->getClientOriginalName();

//         // 取得したファイル名で保存
//         $request->file('image')->storeAs('public/' . $dir, $file_name);

//         return redirect('/');
//     }