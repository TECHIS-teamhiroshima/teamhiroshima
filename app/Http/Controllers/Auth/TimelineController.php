<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\image;

class TimelineController extends Controller
{
    //
    public function storeMyImg(ProfileRequest $request)
    {
    //画像ファイルに名前をつけて指定ディレクトリに保存、変数に代入
    //postで受け取ったデータ（$request）の中にある myPic(ネーム属性)を、第二引数”ユーザーid＋日付.jpg”の名前で第一引数のディレクトリに保存
    $filepath = $request->myPic->storeAs('public/profile_images', Auth::id() . date("YmdHis"). '.jpg');

    //ユーザーIDからユーザー情報を取得、変数に代入
    $user = User::find(auth()->id());

    //ユーザー情報からmy_picカラムのデータをピックアップし、
    //$filepathのファイル名の部分のみをmy_picカラムに代入
    $user->my_pic = basename($filepath);

    //保存
    $user->save();

    //ルート名 showMypage へ移動。フラッシュメッセージのデータも一緒に。
    return redirect()->route('showMypage')->with('success', '新しいプロフィールを登録しました');

    }
}