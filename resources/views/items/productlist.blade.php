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
            <div class="list-page-title">
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
                            <th>詳細</th>
                        </tr>
                    </thead>
                    <tbody id="tbl">
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type }}</td>
                            <td class="test">
                                <span class="span-deteil">
                                {{-- 詳細 --}}
                                    <p class="omit">
                                        <a class="omit-a" href="/detail/{{$item->id}}">{{$item->detail}}</a>
                                    </p>
                                </span>
                                <span class="span-opertion">
                                {{-- 編集 --}}
                                    <a class="button-hover-editing" href="/editing/{{$item->id}}"></a>
                                {{-- 削除 --}}
                                    <form action="{{ url('item/'.$item->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="button-delete" type="submit" id="delete-item-{{ $item->id }}" class="btn btn-danger">削除</button>
                                    </form>
                                </span>
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
