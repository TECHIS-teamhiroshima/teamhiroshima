@extends('layouts.app')


@section('content')
<!-- バリエーションエラーの表示 -->
@include('common.errors')

<div class="add-main">
    <div class="side">
        <div class="headline">
        商品管理システム
        </div>
        <div class="side-low">
            <a href="{{ url('/items') }}">商品一覧</a>
        </div>
    </div>
    <form action="/add" method="POST">
        <div class="rigth">
            <h6 class="text-top">名 前</h6>
                <input type="text" name="name" placeholder="商品名を入力してください">
            <h6>種 別</h6>
                <input type="text" name="type" placeholder="詳細を入力してください" list="syubetu">
                    <datalist id="syubetu" >
                        <option value="1">靴</option>
                        <option value="2">服</option>
                        <option value="3">アクセサリ</option>
                    </datalist>
            <h6>詳 細</h6>
                    <textarea name="detail" rows="10" cols="55" placeholder="詳細を入力してください"></textarea>
                <br>
                    <div class="detail-submit">
                        {{ csrf_field() }}
                        <input type="submit" value="登　録" >
                    </div>
        </div>
    </form>
</div>
 <div class="end">new item</div>
@endsection

