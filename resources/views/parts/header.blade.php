<header class="header1">
	<h1 class="header-h1">TeamHiroshima</h1>
    <div class="header-logout">
        @guest
            @if (Route::has('login'))
            @endif
            @if (Route::has('register'))
            @endif
        @else
        <div class="header-logout">
            <p class="nav-item dropdown">
                <div class="aaa">
                <p id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </p>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </div>
            </p>
        </div>
            @endguest
    </div>
</header>
