@extends('layouts.app')


@section('content')
{{-- <div class="container">
    <form action="/teamhiroshima/add" method="post">
        @csrf
        <table border="1" width="600" >
            <caption>new item</caption>
                <colgroup>
                    <tr scope="col">
                    <th rowspan="1" scope="col" class="skeletor">商品管理システム</th>
                    <tr></tr>
                    <tr></tr>
                </colgroup>
            <tr></tr>
                <th rowspan="10" scope="col" class="heman">
                    <a href="TODO">商品一覧</a>
                    </th>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
                <th class="add-title">名前
                    <tr><td>
                        <input type= "varchar" name="name" placeholder="名前">
                    </td></tr>
                </th>
                <th class="add-title">種別
                    <tr>
                        <td>
                            <input type="smallint" name="type" placeholder="種別">
                        </td>
                    </tr>
                </th>
                <th class="add-title">詳細
                    <tr>
                        <td>
                            <input type="varchar" name="detail" placeholder="詳細">
                        </td>
                    </tr>
                </th>
            <tr>
                <th class="yohaku">
                </th>
                <td class="add-yohaku">
                    <input type="submit" value="登録" >
                </td>
            </tr>
            <tr></tr>
                <th class="yohaku"></th>
            <tr></tr>
            <tr></tr>
                <th class="yohaku"></th>
        </table>

    </form>
</div> --}}


{{-- div.ver --}}

<div class="main">
    <div class="side">
        <div class="headline">
        商品管理システム
        </div>
        <div class="side-low">
            <a href="">商品一覧</a>
        </div>
    </div>
    <div class="rigth">
        <h6 class="text-top">名 前</h6>
        <input type= "varchar" name="name" placeholder="商品名を入力してください">
        <h6>種 別</h6>
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
        <h6>詳 細</h6>
        <textarea name="detail" rows="5" cols="40" placeholder="詳細を入力してください">
        </textarea>
            <br>
        <input type="submit" value="登　録" >
    </div>
</div>
 <div class="end">new item</div>
@endsection

