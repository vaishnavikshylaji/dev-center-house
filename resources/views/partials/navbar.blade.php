<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dev Center House</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(auth()->user())
                    <li class="nav-item">
                        <a class="active" aria-current="page"
                           href="#">Users</a>
                    </li>
                @endif
            </ul>
            @if(!auth()->user())
            <div class="d-flex">
                <a href="{{ route('login') }}">
                    <button class="btn btn-primary me-2">Login</button>
                </a>
                <a href="{{ route('register') }}">
                    <button class="btn btn-outline-success">Register</button>
                </a>
            </div>
            @else
                <a href="{{ route('logout') }}">
                    <button class="btn btn-primary me-2">Logout</button>
                </a>
            @endif
        </div>
    </div>
</nav>
