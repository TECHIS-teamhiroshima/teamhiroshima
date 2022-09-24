@extends('layouts.app')
@section('content')
<body>
    <div class="main-top">
        <div class="detail-top">
            <div class="name">
                <p>商品詳細</p>
            </div>
                <p class="detail-productlist">
                    <a class="return" href="{{ url('/items') }}"></a>
                </p>
        </div>
        <div class="detail-main">
            <a href="{{ asset('image/はてな.jpeg') }}" data-lightbox="group" class="image_box hover_2">
            <div class="img_wrap">
                <img src="{{ asset('image/はてな.jpeg') }}" alt="hatena" width="300">
            </div></a>
            <div class="detail-content">
                <div class="content-title">
                    <label for="title">{{$item->name}}</label>
                </div>
                <div class="content-text">
                    <p for="text">{{$item->detail}}</p>
                </div>
            </div>
        </div>
        <a class="detail-editing" href="/editing/{{$item->id}}"></a>
    </div>
</body>
<div class="end">
    <marquee behavior="alternate" direction="up"><marquee direction="left">Detil </marquee></marquee>
</div>
@endsection
@include("parts.footer")
