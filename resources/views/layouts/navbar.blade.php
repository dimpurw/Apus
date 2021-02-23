<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/"><span class="text-primary">A</span>-Pus</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blogs">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/forum">Forum</a>
                    </li>
                    <li class="nav-item">
                        @if (Auth::check())
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->username }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/profile/{{auth()->user()->id}}">Profile</a>
                                <a class="dropdown-item" href="/dashboards">Dashboard</a>
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                        </div>
                        @else
                        <a class="btn border border-primary ml-lg-3" href="#" data-toggle="modal" data-target="#login" data-whatever="login">Login</a>
                        <a class="btn btn-primary ml-lg-3" href="#" data-toggle="modal" data-target="#register" data-whatever="register">Register</a>
                        @endif
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>