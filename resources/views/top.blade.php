<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{  asset('css/style.css') }}">
</head>
    <body class="body1">
        @include("parts.header")
        <main class="main1">
            <h1>Stock Management</h1>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">アカウント登録</a>
                            @endif
                        @endauth
            </div>
                @endif
        </main>
        @include("parts.footer")
    </body>
</html>

