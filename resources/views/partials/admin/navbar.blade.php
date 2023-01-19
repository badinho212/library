<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                {{-- <li class="nav-item active"><a class="nav-link" href="#!">Sign Out</a></li> --}}
                @if(Auth::check())
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                @endif
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>