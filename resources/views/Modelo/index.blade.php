<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    {{-- seo --}}
    <title>Modelo Index | ZapatosGuanajuato.com</title>
    <meta name="description" content="Modelo Index"/>
    <meta name="keywords" content="Modelo Index"/>
    {{-- end seo --}}

    {{-- canonical --}}
        <script>
            const canonicalUrl = window.location.href;
            const link = document.createElement('link');
            link.rel = 'canonical';
            link.href = canonicalUrl;
            document.head.appendChild(link);
        </script>
    {{-- end canonical --}}

    {{-- images --}}
        <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    {{-- end images --}}

    {{-- style --}}
        {{-- local --}}
            {{-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/fonts.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
            <link rel="stylesheet" href="{{ URL::asset('css/admin.css')}}"> --}}
        {{-- end local
        {{-- online --}}
            <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
            <link rel="stylesheet" href="{{ URL::asset('css/online/admin-min.css')}}">
        {{-- end online --}}
    {{-- end style --}}

    {{-- scripts --}}
        {{-- sripts local --}}
            <script src="{{URL::asset('/scripts/script.js')}}" defer></script>
        {{-- end sripts local--}}
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
    <!-- end Google Analytics tag (gtag.js) -->

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
                <h1>Modelos</h1>
            </div>
            <div class="admin-control-create">
                {{-- create --}}
                <a href="{{route('Modelo.create')}}" class="btn btn-sm btn-primary">Create</a>
            </div>
            <div class="admin-success">
                {{-- succes Message --}}
                @if (session()->has('success'))
                    <div id="success" class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
            </div>
            <hr>

            <div class="admin-container">

                <table class="table-striped w-100" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Material</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Biz</th>
                            <th>Seasson</th>
                            <th>SubCategory</th>
                            <th>Category</th>
                            <th>Management</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($modelos as $modelo)
                            <td>{{$modelo->modelId}}</td>
                            <td>{{$modelo->modelName}}</td>
                            <td>{{$modelo->materialName}}</td>
                            <td>{{$modelo->modelPrice}}</td>
                            <td>{{$modelo->modelImage}}</td>
                            <td>{{$modelo->bizName}}</td>
                            <td>{{$modelo->seassonName}}</td>
                            <td>{{$modelo->modelsubcatName}}</td>
                            <td>{{$modelo->modelcatName}}</td>
                            <td class="admin-control-buttons">
                                {{-- edit --}}
                                    <a href="{{route('Modelo.edit',['modelo'=>$modelo->modelId])}}" class="btn btn-sm btn-primary">Edit</a>
                                {{-- delete --}}
                                <form action="{{route('Modelo.destroy',['modelo'=>$modelo->modelId])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger mx-2">
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mb-4 pb-4">
                {{$modelos->links()}}
            </div>

        @endsection

    </x-layout>
</html>
