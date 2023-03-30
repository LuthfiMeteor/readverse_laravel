<div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">

                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}"
                            alt=""></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <form action="{{ url('searchbuku') }}"  method="GET" role="search" class="form-inline me-5 pe-5">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                    aria-label="Search" name="search">
                                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="/">Home</a>
                            </li>

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Book</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Manga</a>
                                    <a class="dropdown-item" href="#">Manwha</a>
                                    <a class="dropdown-item" href="#">Novel</a>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">All Category</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="pl-4 pl-md-0 ml-0 ml-md-4 ">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="pl-4 pl-md-0 ml-0 ml-md-4 dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                        href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('bookmark') }}">
                                            {{ __('Bookmark') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>



                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                </li>
                            @endguest
                        </ul>

                    </div>

                </nav>
            </div>
        </div>
    </div>
</div>
