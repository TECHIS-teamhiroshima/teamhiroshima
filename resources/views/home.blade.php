@extends('layouts.app')

@section('content')
<body>
    <div class="home-main">
        <div class="side-content">
                <div class="side-title">
                    <h5>商品管理システム</h5>
                </div>
                <div class="side-menu">
                    <a href="{{ url('/items') }}">商品一覧</a>
                </div>
        </div>
        <div class="main-content">
            <div class="page-title">
                <h2>ホーム画面</h2>
                <a href="">商品登録画面</a>
            </div>
        </div>
    </div>
</body>
@endsection

