<nav class="navbar navbar-expand-md bg-dark  navbar-dark shadow-sm">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

              <li class="navbar-item" href="">
                <a class="nav-link vertical-bar" href="{{ url('/') }}">
                  HOME
                </a>

              </li>

              <li class="navbar-item" href="">
                <a class="nav-link vertical-bar" href="{{ url('/posts') }}">

                  Posts Archive
                </a>
              </li>

              @auth



              <li class="navbar-item" href="">
                <a class="nav-link text-warning" href="{{ route('post.create') }}">
                  <strong>

                    Create-Post

                  </strong>

                </a>
              </li>

              @endauth

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                @guest



                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="vertical-bar">
                                                        Utente: {{ Auth::user()->name }} </span>
                            <span>                      Email: {{ Auth::user()->email }}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
