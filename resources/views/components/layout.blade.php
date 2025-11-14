<body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZP9TGP6"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Directorio Zapatos Guanajuato</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fabricantes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('Fabricantes.index')}}">Todos</a></li>
                            <li><a class="dropdown-item" href="{{route('Fabricantes.showGenero', ['mujer'])}}">Mujer</a></li>
                            <li><a class="dropdown-item" href="{{route('Fabricantes.showGenero', ['hombres'])}}">Hombres</a></li>
                            <li><a class="dropdown-item" href="{{route('Fabricantes.showGenero', ['ninos'])}}">Niños</a></li>
                            <li><a class="dropdown-item" href="{{route('Fabricantes.showGenero', ['ninas'])}}">Niñas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mayoristas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('Wholesalers.index')}}">Todos</a></li>
                            <li><a class="dropdown-item" href="{{route('Wholesalers.showGenero', ['mujer'])}}">Mujer</a></li>
                            <li><a class="dropdown-item" href="{{route('Wholesalers.showGenero', ['hombres'])}}">Hombres</a></li>
                            <li><a class="dropdown-item" href="{{route('Wholesalers.showGenero', ['ninos'])}}">Niños</a></li>
                            <li><a class="dropdown-item" href="{{route('Wholesalers.showGenero', ['ninas'])}}">Niñas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Minoristas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('Retails.index')}}">Todos</a></li>
                            <li><a class="dropdown-item" href="{{route('Retails.showGenero', ['mujer'])}}">Mujer</a></li>
                            <li><a class="dropdown-item" href="{{route('Retails.showGenero', ['hombres'])}}">Hombres</a></li>
                            <li><a class="dropdown-item" href="{{route('Retails.showGenero', ['ninos'])}}">Niños</a></li>
                            <li><a class="dropdown-item" href="{{route('Retails.showGenero', ['ninas'])}}">Niñas</a></li>
                        </ul>
                    </li>

                    @auth
                    {{-- admin --}}
                        @if (auth()->user()->name === 'Marketo')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Management
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('BizCategory.index')}}">Buissness Categories</a></li>
                                <li><a class="dropdown-item" href="{{route('ModelCategory.index')}}">Model Category</a></li>
                                <li><a class="dropdown-item" href="{{route('ModelSubcategory.index')}}">Model SubCategory</a></li>
                                <li><a class="dropdown-item" href="{{route('Seasson.index')}}">Seassons</a></li>
                                <li><a class="dropdown-item" href="{{route('Material.index')}}">Materials</a></li>
                                <li><a class="dropdown-item" href="{{route('SaleType.index')}}">SaleType</a></li>
                                <li><a class="dropdown-item" href="{{route('Biz.index')}}">Business</a></li>
                                <li><a class="dropdown-item" href="{{route('Modelo.index')}}">Modelos</a></li>
                                <li><a class="dropdown-item" href="{{route('User.index')}}">Users</a></li>
                                <li><a class="dropdown-item" href="{{route('Premium.index')}}">Premium</a></li>
                                <li><a class="dropdown-item" href="{{route('Prospectos.index')}}">Prospectos</a></li>
                                </ul>
                            </li>
                        @endif
                    @endauth
                </ul>
                <ul class="navbar-nav navbar-search">
                    <li class="nav-item">
                        {{-- busqueda --}}
                        <x-form-busqueda></x-form-busqueda>
                        {{-- end busqueda --}}
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @auth
                        {{-- login --}}
                        <div class="nav-item" style="text-align: center; padding:5px">
                            <span class="m-2" style="font-size: .7rem">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>
                            </span>
                            <p>Hola: {{auth()->user()->name}}</p>
                        </div>

                        <li class="nav-item" style="text-align: center; padding:5px">
                            <form action="{{route('User.logout')}}" method="post" class="inline">
                                @csrf
                                @method('POST')
                                <button class="btn btn-sm btn-logout d-flex nav-link-register" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
                                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                    </svg>
                                </button>
                                <p>Cerrar sesion</p>
                            </form>
                        </li>
                    @else

                        {{-- logout --}}
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="/User/create"> --}}
                            <a class="nav-link nav-link-register" href="{{route('User.create')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                                </svg>
                                <p>Registro</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-register" href="{{route('User.login')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                    <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15zM11 2h.5a.5.5 0 0 1 .5.5V15h-1zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
                                </svg>
                                <p>Iniciar Sesion</p>
                                </a>
                        </li>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>

      <div class="main-container">
            @yield('main-content')
      </div>

      @include('/partials/_footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

