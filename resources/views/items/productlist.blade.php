@extends('layouts.app')

@section('content')
<body>
    <div class="main">
        <div class="side-content">
                <div class="side-title">
                    <h5>商品管理システム</h5>
                </div>
                <div class="side-menu">
                    <a href="">商品一覧</a>
                </div>
        </div>
        <div class="main-content">
            <div class="page-title">
                <h2>商品一覧画面</h2>
                <a href="{{ url('/add') }}">商品登録画面</a>
            </div>
            <div class="item-table">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>名前</th>
                        <th>種別</th>
                        <th><a href="{{ url('/detail') }}">詳細</a></th>
                    </tr>
                    </thead>
                    <tbody id="tbl">
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type }}</td>
                            <td class="test"><a href="{{ url('/editing') }}">{{ $item->detail }}</a>
                        <!-- TODO: 削除ボタン -->
                        <form action="{{ url('item/'.$item->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" id="delete-item-{{ $item->id }}" class="btn btn-danger">削除</button>
                        </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection
