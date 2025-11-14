<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    {{-- seo --}}
        <meta name="description" content="Crear Categorias Negocio "/>
        <meta name="keywords" content="Crear Categorias Negocio "/>
        <title> Crear Categorias Negocio | ZapatosGuanajuato.com</title>
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
        <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    {{-- end images --}}

    {{-- style --}}
        {{-- local --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}"> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}"> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" /> --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/admin.css')}}"> --}}
        {{-- end local
        {{-- online --}}
            <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
            <link rel="stylesheet" href="{{URL::asset('css/online/admin-min.css')}}">
        {{-- end online --}}
    {{-- style --}}

    {{-- scripts --}}
        {{-- sripts local --}}
            <script src="{{URL::asset('/scripts/script.js')}}" defer></script>
        {{-- endsripts local--}}
        {{-- scripts online --}}
            {{-- <script src="{{URL::asset('/scripts/script-min.js')}}"></script> --}}
        {{-- end scripts online --}}
    {{-- end scripts --}}

    <!-- Google Analytics tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LEV2309FWD"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-LEV2309FWD');
        </script>
    <!-- Google Analytics tag (gtag.js) -->

    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KZP9TGP6');</script>
    <!-- End Google Tag Manager -->

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

    {{-- mailchimp --}}
        <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}
        (document,"script","https://chimpstatic.com/mcjs-connected/js/users/948eabd2b6e2e810127ea36f7/1e99737d0b995b846ad75f09d.js");</script>
    {{-- end-mailchimp --}}
</head>

<x-layout>
    @section('main-content')
        <div class="admin-hero">
            <h1>Create BizCategory </h1>
        </div>

        <div class="admin-container-control">
            <form method="POST" action="{{route('BizCategory.store')}}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-3">
                <label for="bizcatId" class="form-label">ID</label>
                <input type="number" name="bizcatId" id="bizcatId" class="form-control w-25" disabled>
                </div>

                <div class="mb-3">
                <label for="bizcatName" class="form-label">Name</label>
                <input type="text"  id="bizcatName"  name="bizcatName" class="form-control w-50">
                {{-- Error --}}
                @error('bizcatName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="bizcatImage" class="form-label">Image</label>
                    <input type="file"  id="bizcatImage"  name="bizcatImage" class="form-control w-50">
                {{-- Error --}}
                @error('bizcatName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="admin-control-buttons">
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    <a href="/BizCategory" class="btn btn-sm btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    @endsection
</x-layout>
