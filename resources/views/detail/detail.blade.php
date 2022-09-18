@extends('layouts.app')

@section('content')


<body>
    <div class="main-top">
        <div class="detail-top">
            <div class="name">
                <p>商品詳細</p>
            </div>
                <p class="detail-productlis">
                    <a href="{{ url('/items') }}">戻る</a>
                </p>
        </div>
        <div class="detail-main">
            <div class="image">
                {{-- TODO --}}
                <img src="/teamhiroshima/storage/app/public/profile_images/はてな.jpeg">
                <a href="はてな.jpg" data-lightbox="abc" data-title="拡大イメージ">
                <img src="はてな.jpg" alt=イメージ写真">
            </div>
            <div class="detail-content">
                <div class="content-title">
                    <label for="title">{{$items->name}}</label>
                </div>
                <div class="content-text">
                    <label for="text">{{$items->detail}</label>
                </div>
            </div>
        </div>
        <p class="detail-editing">
            <a href="/editing" rel="nofollow">編集</a>
        </p>
    </div>


<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

</body>

<div class="end">
    <marquee behavior="alternate" direction="up"><marquee direction="left">Detil </marquee></marquee>
</div>

@endsection
