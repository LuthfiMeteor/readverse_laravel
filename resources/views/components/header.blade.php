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
                        <form action="{{ url('searchbuku') }}" method="GET" role="search" class="form-inline m-auto">
                            <div class="input-group">
                                <input class="form-control border-end-0 border rounded-pill" type="search"
                                    placeholder="Search ..." id="example-search-input" name="search">
                                <span class="input-group-append">
                                    <button
                                        class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3"
                                        type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav ml-auto py-4 py-md-0">

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="/">Home</a>
                            </li>

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Book</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('manga/') }}">Manga</a>
                                    <a class="dropdown-item" href="{{ url('manhwa/') }}">Manwha</a>
                                    <a class="dropdown-item" href="{{ url('novel/') }}">Novel</a>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{ url('all/') }}">All Category</a>
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
