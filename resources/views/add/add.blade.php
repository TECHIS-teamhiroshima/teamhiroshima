@extends('layouts.app')


@section('content')
<!-- バリエーションエラーの表示 -->
@include('common.errors')
<body>
    <div class="add-main">
        <div class="side">
            <div class="headline">
                <marquee height="40" width="auto" behavior="alternate" direction="up" scrollamount="1" truespeed>
                商品管理システム
                </marquee>
            </div>
            <div class="side-low">
                <a href="{{ url('/items') }}">商品一覧</a>
            </div>
        </div>
        <form action="/add" method="POST">
            <input type="hidden" name="user_id" value="{{ $user_id }}">
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
                            <form action="https://example.com/post/form/" method="post" enctype="multipart/form-data">
                                <p>
                                    <label>
                                        <span class="filelable" title="ファイルを選択してください">
                                            <span id="selectednum">image</span>
                                            </span>
                                                <input type="file" name="datafile" id="filesend" multiple accept=".jpg,.gif,.png,image/gif,image/jpeg,image/png">
                                    </label>
                                        <span id="previewbox"></span>
                                            <input class="reset" type="reset" value="取消" onclick="resetPreview();">
                                </p>
                                <script>
                                    // ▼①ファイル選択フォームの更新イベントに処理を追加
                                    document.getElementById("filesend").addEventListener('change', function(e) {
                                        var files = e.target.files;
                                        previewUserFiles(files);
                                    });
                                    // ▼②選択画像をプレビュー
                                    function previewUserFiles(files) {
                                        // 一旦リセットする
                                        resetPreview();
                                        // 選択中のファイル1つ1つを対象に処理する
                                        for (var i = 0; i < files.length; i++) {
                                        // i番目のファイル情報を得る
                                            var file = files[i];
                                            // 選択中のファイルが画像かどうかを判断
                                            if( file.type.indexOf("image") < 0 ) {
                                                /* 画像以外なら無視 */
                                                continue;
                                            }
                                            // ファイル選択ボタンのラベルに選択個数を表示
                                            document.getElementById("selectednum").innerHTML = (i+1) + "個選択中";
                                            // 画像プレビュー用のimg要素を動的に生成する
                                            var img = document.createElement("img");
                                            img.classList.add("previewImage");
                                            img.file = file;
                                            img.height = 100;   // プレビュー画像の高さ
                                            // 生成したimg要素を、プレビュー領域の要素に追加する
                                            document.getElementById('previewbox').appendChild(img);
                                            // 画像をFileReaderで非同期に読み込み、先のimg要素に紐付けする
                                            var reader = new FileReader();
                                            reader.onload = (function(tImg) { return function(e) { tImg.src = e.target.result; }; })(img);
                                            reader.readAsDataURL(file);
                                        }
                                    }
                                    // ▼③プレビュー領域をリセット
                                    function resetPreview() {
                                        // プレビュー領域に含まれる要素のすべての子要素を削除する
                                        var element = document.getElementById("previewbox");
                                        while (element.firstChild) {
                                            element.removeChild(element.firstChild);
                                        }
                                        // ファイル選択ボタンのラベルをデフォルト状態に戻す
                                        document.getElementById("selectednum").innerHTML = "選択";
                                    }
                                </script>
                            </form>
                            <br>
                <div class="detail-submit">
                    {{ csrf_field() }}
                    <button type="submit" class="button-hover"></button>
                </div>
            </div>
        </form>
    </div>
    <div class="end">
        <marquee behavior="alternate" direction="up"><marquee direction="left">new item</marquee></marquee>
    </div>
</body>
@endsection
@include("parts.footer")

