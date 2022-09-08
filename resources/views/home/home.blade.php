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
                <h2>ホーム画面</h2>
            </div>
            <div class="item-table">
                <table class="table">
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
        </div>
    </div>
</body>
@endsection
