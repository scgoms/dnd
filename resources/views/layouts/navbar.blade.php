<nav class="container navbar md:navbar h-12">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    @guest
    <div class="navbar-links">
        <a class="navbar-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        <a class="navbar-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
    @else
    <div class="navbar-links">
        {{ Auth::user()->name }}
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
</nav>
