<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">

    {{-- seo --}}
        <meta name="description" content="Modelo Categoria Show"/>
        <meta name="keywords" content="Modelo Categoria Show"/>
        <title>Modelo Categoria Show | ZapatosGuanajuato.com</title>
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
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
            <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/admin.css')}}"> --}}
        {{-- end local
        {{-- online --}}
           <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/admin-min.css')}}">
        {{-- end online --}}
    {{-- style --}}

    {{-- scripts --}}
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
        <h1>Show Model Category </h1>
    </div>
    <div class="admin-container-control">

        <form enctype="multipart/form-data">
            <div class="m-2">
            <label for="modelcatId" class="form-label">ID</label>
            <input type="number" name="modelcatId" id="modelcatId" value="{{$modelcategory->modelcatId}}" class="form-control w-25" disabled>
            </div>
            <div class="mb-2">
            <label for="modelcatName" class="form-label">Name</label>
            <input type="text"  id="modelcatName"  name="modelcatName" value="{{$modelcategory->modelcatName}}" class="form-control w-50">
            </div>
            <div class="mb-2">
                <img src="{{asset('storage/'.$modelcategory->modelcatImage)}}" alt="{{'storage/logos'}}" width="600" height="600">
                {{-- <img src="{{asset('/'.$modelcategory->modelcatImage)}}" alt="{{'/logos'}}" width="600" height="600"> --}}
            </div>
            {{-- controls --}}
            <div class="admin-control-buttons">
                <a href="{{route('ModelCategory.edit',['modelCategory'=>$modelcategory])}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/ModelCategory" class="btn btn-sm btn-danger">Cancel</a>
            </div>
        </form>
    </div> {{-- end container --}}
    @endsection

</x-layout>
