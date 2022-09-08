@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
<div class="container">
        <form action="/laravel01s/add" method="post">
            <table>
            @csrf
                <tr><th>name: </th><td>
                    <input type="text" name="name" placeholder="name入力">
                    </td></tr>
                <tr><th>phone: </th><td>
                    <input type="text" name="phone" placeholder="phone入力">
                    </td></tr>
                <tr><th>email: </th><td>
                    <input type="text" name="email" placeholder="email入力">
                    </td></tr>
                    <tr><th></th><td><input type="submit" value="登録">
                    </td></tr>
            </table>
        </form>
@endsection
