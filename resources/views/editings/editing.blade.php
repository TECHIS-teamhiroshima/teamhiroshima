@extends('layouts.app')

@section('content')
<body>
    <div class="main">
        <div class="side-content">
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
                <a href="">商品登録画面</a>
            </div>
            <div class="main-container">
            <div class="rigth">
                <h6 class="text-top">名 前</h6>
                <input type= "varchar" name="name" placeholder="商品名を入力してください">
                <h6 class="text-second">種 別</h6>
                    {{-- <div class="syubetu">
                        <select name='syubetu'>
                            <option value="" disabled selected style="display:none;">種類を入力してください</option>
                            <option value='kutu'>靴</option>
                            <option value='huku'>服</option>
                            <option value='sonota'>その他</option>
                        </select>
                    </div> --}}
                    <input type="text" name="test" placeholder="詳細を入力してください" list="syubetu">
                        <datalist id="syubetu" >
                            <option value="靴"></option>
                            <option value="服"></option>
                            <option value="アクセサリ"></option>
                        </datalist>
                <h6 class="text-serd">詳 細</h6>
                <textarea name="detail" rows="5" cols="40" placeholder="詳細を入力してください">
                </textarea>
                    <br>
                <input type="submit" value="登　録" >
            </div>
            </div>
        </div>
    </div>
</body>
@endsection
