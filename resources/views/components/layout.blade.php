<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- seo --}}
    <meta name="description" content={{$pageDescription}}/>
    <meta name="keywords" content="Catalogo,Fabricantes,Zapatos,Mayoristas,Calzado,Negocio,Leon,Guanajuato"/>
    <title> {{$pageTitle}} | ZapatosGuanajuato.com</title>
    {{-- canonical --}}
    <script>
        const canonicalUrl = window.location.href;
        const link = document.createElement('link');
        link.rel = 'canonical';
        link.href = canonicalUrl;
        document.head.appendChild(link);
    </script>

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

    {{-- schema --}}
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "OnlineStore",
          "name": "Zapatos Guanajuato MX",
          "description": "Catalogo,Fabricantes,Zapatos,Mayoristas,Calzado,Negocio,Leon,Guanajuato",
          "image": "	https://zapatosguanajuato.mx/public/images/img_index.jpg",
          "logo": "",
          "parentOrganization": {
            "@type": "OnlineBusiness",
            "name": "Zapatos Guanajuato MX",
            "url": "https://zapatosguanajuato.mx/public/"
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
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('Factories')}}">Fabricantes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Wholesalers')}}">Mayoristas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Retails')}}">Minoristas</a>
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
                <a class="nav-link" href="{{route('Register')}}">
                    <span class="material-symbols-outlined">
                        how_to_reg
                    </span>
                    Registro
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('User.login')}}">
                    <span class="material-symbols-outlined">
                        login
                    </span>
                    Iniciar Sesion
                    </a>
            </li>
        @endauth
        </ul>
        </div>
    </nav>

      <div class="main-container pt-5 pb-5">
            @yield('main-content')
      </div>

      <footer>
        <div class="container d-flex justify-content-center align-items-center w-100 text-center">
            <div class="col">
                <a href="{{route('privacy-policy')}}">
                  <span>Politíca de Privacidad</span>
                </a>
            </div>
            <div class="col">
              <a href="{{route('about-us')}}">
                <span>Quiénes somos?</span>
              </a>
            </div>
            <div class="col d-flex" style="align-items:center; justify-content:space-evenly">
                <div>
                    <a href="https://solucion-e.com.mx/">
                      <span class="material-symbols-outlined fs-3">language</span>
                    </a>
                </div>
                <div>
                  <a href="https://www.facebook.com/zapatosguanajuatomx/">
                    <span class="bi bi-facebook fs-4"></span>
                  </a>
                </div>
                <div>
                  <a href=" https://wa.me/4771598183">
                    <span class="bi bi-whatsapp fs-4"></span>
                  </a>
                </div>
                <div>
                  <a href="https://twitter.com/zapatosenleon">
                  <span class="bi bi-twitter-x fs-5"></span>
                  </a>
                </div>
                <div>
                  <a href="mailto:admin@zapatosguanajuato.mx">
                    <span class="material-symbols-outlined fs-4">contact_mail</span>
                  </a>
                </div>
            </div>
        </div>
            <div class="copy-right">Directorio Zapatos Guanajuato @2024</div>
      </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
