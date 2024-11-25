<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <div class="mx-1">
            @guest
                <a href="/login" class="btn btn btn-info">Login</a>
            @endguest
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info">Logout</button>
                </form>
            @endauth
        </div>
    </ul>
</nav>
