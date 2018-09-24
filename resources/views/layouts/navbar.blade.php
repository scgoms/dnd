<navbar>
    <template slot="brand">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'DND') }}
        </a>
    </template>
    @guest
    <a class="navbar-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    <a class="navbar-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    @else
    @stack('navbar-links')
    <div class="flex flex-col">
        <a href="/profile" class="navbar-link">
            Profile
        </a>
        <a href="/profile/games" class="navbar-link">
            Games
        </a>
        <a href="/profile/characters" class="navbar-link">
            Characters
        </a>
        <a href="{{ route('logout') }}"
            class="navbar-link"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    @endguest
</navbar>
