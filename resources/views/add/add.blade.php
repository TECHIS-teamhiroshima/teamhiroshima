@extends('layouts.app')


@section('content')
<div class="main">
    <div class="side">
        <div class="headline">
        商品管理システム
        </div>
        <div class="side-low">
            <a href="{{ url('/items') }}">商品一覧</a>
        </div>
    </div>
    <div class="rigth">
        <h6 class="text-top">名 前</h6>
        <input type= "varchar" name="name" placeholder="商品名を入力してください">
        <h6>種 別</h6>
            <input type="text" name="test" placeholder="詳細を入力してください" list="syubetu">
                <datalist id="syubetu" >
                    <option value="靴"></option>
                    <option value="服"></option>
                    <option value="アクセサリ"></option>
                </datalist>
        <h6>詳 細</h6>
        <textarea name="detail" rows="5" cols="40" placeholder="詳細を入力してください">
        </textarea>
            <br>
        <input type="submit" value="登　録" >
    </div>
</div>
<div class="end">new item</div>
@endsection

