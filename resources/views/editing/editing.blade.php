@extends('layouts.app')

@section('content')
<body>
    <div class="editing-main">
        <div class="editing-side-content">
            <div class="side-title">
                <h5>商品管理シテム</h5>
            </div>
            <div class="side-menu">
                <a href="{{ url('/items') }}">商品一覧</a>
            </div>
        </div>
        <div class="main-content">
            <div class="page-title">
                <h2>商品編集画面</h2>
                <a href="{{ url('/add') }}">商品登録画面</a>
            </div>
            <div class="main-container">
                <div class="rigth">
                    <h6 class="text-top">名 前</h6>
        @include('common.errors')
        <form action="{{ route('item.update' ,$item->id) }}" enctype="multipart/form-data" method="POST"
        class="form-horizontal2">
        @csrf
        @method('PUT')
         <input type="name" name="name" value="{{ $item->name }}" class="form-control1">

        <h6 class="text-second">種 別</h6>
         <input type="name" name="type" value="{{ $item->type }}" class="form-control2">

        <h6 class="text-serd">詳 細</h6>
         <textarea name="detail" cols="300" rows="25"  value="{{ $item->detail }}" class="form-control3">{{ $item->detail }}</textarea>
       <br>
       <br>


     <div class="form-group">
       <div class="col-sm-offset-3 col-list">
         <button type="submit" class="send">
           送信
         </button>
       </div>
     </div>
    </form>
    </div>
@endsection
