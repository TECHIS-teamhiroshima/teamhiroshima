<header class="header1">
	<h1 class="header-h1">TeamHiroshima</h1>
    <div class="header-logout">
        @guest
            @if (Route::has('login'))
            @endif
            @if (Route::has('register'))
            @endif
        @else
        <div>
            <p class="nav-item dropdown">
                <p id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </p>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        @endguest
    </div>
</header>
