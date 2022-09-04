@extends('layouts.app')

@section('content')
<div calss="title">
    <h1>商品一覧画面</h1>
</div>
<div class="item-table">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>種別</th>
            <th>詳細</th>
        </tr>
        </thead>
        <tbody id="tbl">
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->detail }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
