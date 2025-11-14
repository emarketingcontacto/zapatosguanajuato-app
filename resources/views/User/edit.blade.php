<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        {{-- seo --}}
            <title>User Edit | ZapatosGuanajuato.com</title>
            <meta name="description" content="User Edit"/>
            <meta name="keywords" content="User Edit"/>
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
                <h1>Edit User</h1>
            </div>

            <div class="admin-container-control">
                <form action="{{route('User.update', ['user'=>$user])}}" method="post">
                    @csrf
                    @method('PUT')
                    {{-- id --}}
                    <div class="mb-3">
                        <label for="userId" class="form-label">ID</label>
                        <input type="number" name="userId" class="form-control" value="{{$user->id}}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}" >
                        {{-- Error --}}
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}" disabled >
                        {{-- Error --}}
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- password --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" >
                        <p class="form-text">Most be 6 characters lenght</p>
                        {{-- Error --}}
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- password confirmation --}}
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                        <input type="password"  name="password_confirmation" class="form-control w-25">
                        <p class="form-text">Most be 6 characters lenght</p>
                        {{-- Error --}}
                        @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- created at --}}
                    <div class="mb-3">
                        <label for="created_at" class="form-label">Created </label>
                        <input type="datetime" name="created_at" class="form-control" value="{{$user->created_at}}" disabled>
                    </div>
                    {{-- updated at --}}
                    <div class="mb-3">
                        <label for="updated_at" class="form-label">Last Update </label>
                        <input type="datetime" name="updated_at" class="form-control" value="{{$user->updated_at}}" disabled>
                    </div>
                    {{-- submit --}}
                    <div class="admin-control-buttons">
                        <input type="submit" value="Save" class="btn btn-sm btn-success">
                        <a href="/User" class="btn btn-sm btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        @endsection

    </x-layout>
</html>
