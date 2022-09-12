@extends('layouts.app')

@section('content')


<body>
    <div class="main-top">
        <div class="top-top">
            <h2>商品詳細</h2>
                <a href="productlist" rel="nofollow""">戻る</a>
        </div>
            <div class="detail-main">
                <div class="image">
                    <a href="はてな.jpg" data-lightbox="abc" data-title="拡大イメージ">
                    <img src="はてな.jpg" alt=イメージ写真">
                    </a>
                    <div>
                        <a href="edit">編集</a>
                    </div>
                </div>
                <div class="content-text">
                        <label for="text">本文</label>
                        {{-- <textarea class="form-control" rows="10" name="memo">{{ $memo->memo }}</textarea> --}}
                </div>
            </div>
        <div class="page-title">
            <div class="detail-detail">
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

</body>
@endsection
