<nav class="w-full flex flex-col">
    <div class="container navbar md:navbar h-12 relative">

        <img src="/storage/images/topleft_bookend.png" class="navbar-start" style="z-index:1000">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'DND') }}
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
        <img src="/storage/images/topright_bookend.png" class="navbar-end" style="z-index:1000">
    </div>
    <div class="navbar-border container mx-auto -mt-2" style="z-index:100"></div>
</nav>
