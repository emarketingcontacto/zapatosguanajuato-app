<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

    {{-- style --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- style --}}

    {{-- sripts --}}
        <script src="{{URL::asset('/scripts/script.js')}}"></script>
        <script src="{{URL::asset('/scripts/likes.js')}}"></script>
        <script src="{{URL::asset('/scripts/modelcatbiz.js')}}"></script>
        <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    {{-- endsripts --}}

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
                    <button class="btn btn-sm btn-logout d-flex" style="font-size: .7rem" type="submit">
                        <span class="material-symbols-outlined m-n3" style="font-size: .7rem">logout</span> Logout
                    </button>
                </form>
                </a>
            </li>
        @else

        {{-- logout --}}
            <li class="nav-item">
                {{-- <a class="nav-link" href="/User/create"> --}}
                <a class="nav-link nav-link-register" href="{{route('Register')}}">
                    <p class="material-symbols-outlined" style="margin: 0;padding: 0;">
                        how_to_reg
                    </p>
                    <p>Registro</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-register" href="{{route('User.login')}}">
                    <p class="material-symbols-outlined" style="margin: 0;padding: 0;"> login </p>
                    <p>Iniciar Sesion</p>
                    </a>
            </li>
        @endauth
        </ul>
        </div>
    </nav>

      <div class="main-container pt-5 pb-5">
            @yield('main-content')
      </div>

      @include('/partials/_footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
