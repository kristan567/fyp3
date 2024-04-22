<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="{{ route('home') }}"><img width="50" height="50" class="rounded-circle" src="{{ global_asset('images/forApp/Untitled-1.png') }}" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown" style="margin-left: 60%;">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('home') }}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('mainservice') }}">Blog</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Our Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('task') }}">Task Mamangement</a>
                        <a class="dropdown-item" href="{{ route('recommendation') }}">View Recommendation</a>
                        <a class="dropdown-item" href="{{ route('notification') }}">Notifying Users</a>
                        <a class="dropdown-item" href="{{ route('inventory') }}">Inventory</a>
                        <a class="dropdown-item" href="{{ route('dashboardV') }}">Analytical Dashboard</a>
                        <a class="dropdown-item" href="{{ route('realtimemonitor') }}">Real Time Monitoring</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactus') }}">contact us</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif --}}
                    @endauth
                @endif

            </ul>
        </div>

    </nav>
</header>