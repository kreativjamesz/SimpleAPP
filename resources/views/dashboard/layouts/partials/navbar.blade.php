<nav class="navbar navbar-expand-md bg-warning navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            Simple App
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @role('superadministrator|administrator')
                <li><a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-users"></i> Users</a></li>
                @endrole
                <li><a class="nav-link" href="{{ url('projects') }}"><i class="fa fa-briefcase"></i> Projects</a></li>
                <li><a class="nav-link" href="{{ url('tasks') }}"><i class="fa fa-list"></i> Tasks</a></li>
                <li><a class="nav-link" href="{{ route('profile') }}"><i class="fa fa-image"></i> Profile</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    @role('superadministrator|administrator')
                        <li><a class="nav-link" href="{{ route('shopping-list') }}"><i class="fa fa-shopping-bag"></i> Shopping-list</a></li>
                    @endrole
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>