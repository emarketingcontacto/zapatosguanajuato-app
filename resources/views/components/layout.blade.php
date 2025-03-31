<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    {{-- seo --}}
        <meta name="description" content="{{$pageDescription}}"/>
        <meta name="keywords" content="Directorio, Fabricantes,Mayoristas, Minoristas, Zapatos, Calzado, Guanajuato, Proveedores de Zapatos hecho en el Estado de Guanajuato"/>
        <title> {{$pageTitle}} | ZapatosGuanajuato.com</title>
        {{-- canonical --}}
            <script>
                const canonicalUrl = window.location.href;
                const link = document.createElement('link');
                link.rel = 'canonical';
                link.href = canonicalUrl;
                document.head.appendChild(link);
            </script>
        {{-- end canonical --}}
    {{-- end seo --}}
    {{-- images --}}
    {{-- <link rel="preload" as="image" href="../../../public/images/img_index.avif"/> --}}
    {{-- style --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}
        {{-- local --}}
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}">
        {{-- online --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-min.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/main-min.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
    {{-- style --}}
    {{-- sripts local --}}
        {{-- <script src="{{URL::asset('/scripts/script.js')}}" defer></script> --}}
        {{-- <script src="{{URL::asset('/scripts/likes.js')}}" defer></script> --}}
        {{-- <script src="{{URL::asset('/scripts/modelcatbiz.js')}}" defer></script> --}}
        {{-- <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon"> --}}
    {{-- endsripts local--}}
    {{-- scripts online --}}
        <script src="{{URL::asset('/scripts/script-min.js')}}"></script>
        <script src="{{URL::asset('/scripts/likes-min.js')}}"></script>
        <script src="{{URL::asset('/scripts/modelcatbiz-min.js')}}"></script>
        <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    {{-- end scripts online --}}
    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LEV2309FWD"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-LEV2309FWD');
        </script>
    <!-- Google tag (gtag.js) -->
    {{-- Pinterest Tag --}}
        <meta name="p:domain_verify" content="59864595446c9bd25ed7b86d881293d4"/>
    {{-- End Pinterest Tag --}}
    {{-- schema --}}
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "OnlineStore",
          "name": "Zapatos Guanajuato",
          "description": "Catalogo,Fabricantes,Zapatos,Mayoristas,Calzado,Negocio,Leon,Guanajuato",
          "image": "	https://zapatosguanajuato.com/public/images/img_index.jpg",
          "logo": "",
          "parentOrganization": {
            "@type": "OnlineBusiness",
            "name": "Zapatos Guanajuato",
            "url": "https://zapatosguanajuato.com"
          },
          "address": {
            "@type": "PostalAddress",
            "addressCountry": "Mexico",
            "addressLocality": "Guanajuato"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingCount": 20,
            "ratingValue": 4.7
          },
          "interactionStatistic": {
            "@type": "InteractionCounter",
            "userInteractionCount": 75,
            "interactionType": "https://schema.org/TradeAction"
          },
          "foundingDate": "2019-10-24"
        }
        </script>
    {{-- end schema --}}
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Directorio Zapatos Guanajuato</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('Fabricantes')}}">Fabricantes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Wholesalers')}}">Mayoristas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Retails')}}">Minoristas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Damas')}}">Mujer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Hombres')}}">Hombre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Ninas')}}">Niñas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Ninos')}}">Niños</a>
              </li>

            <x-Subcategories></x-Subcategories>

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
                        </ul>
                    </li>
                @endif
              @endauth
            </ul>
          </div>

          <ul class="navbar-nav">
        @auth
        {{-- login --}}
            <span class="m-2" style="font-size: .7rem">
                Welcome {{auth()->user()->name}}
            </span>
            <li class="nav-item">
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
                </a>
            </li>
        @else

        {{-- logout --}}
            <li class="nav-item">
                {{-- <a class="nav-link" href="/User/create"> --}}
                <a class="nav-link nav-link-register" href="{{route('Register')}}">
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
    </nav>

      <div class="main-container">
            @yield('main-content')
      </div>

      @include('/partials/_footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
