<nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
    <div class="container">
        {{-- Logo --}}
        @auth
            <a class="navbar-brand text-light" href="{{ url('/home') }}">
                <img src="{{ asset('storage/image/logo.png') }}" alt="Post Now!">
            </a>
        @else
            <a class="navbar-brand text-light" href="{{ url('/') }}">
                <img src="{{ asset('storage/image/logo.png') }}" alt="Post Now!">
            </a>
        @endauth
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    {{-- Login Link --}}
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    {{-- Register Link --}}
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    {{-- Link to Users View --}}
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('users.index') }}">Users</a>
                    </li>
                    {{-- Dropdown --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            {{-- Link to User View --}}
                            <a class="dropdown-item" href="{{ route('users.show', ['user' => Auth::id()]) }}">My profile</a>
                            <hr class="dropdown-divider">
                            {{-- Logout Link --}}
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none text-light">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
