<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/image/logo.png" alt="" width="180">
        </a>
        <!-- Collapse button -->
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dark-blue-text"><i class="fa fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse ml-auto justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="color: white" class="px-4 btn btn-xl nav-link" role="button"
                        href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>