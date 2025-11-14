<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    {{-- seo --}}
    <meta name="description" content="Biz-Create"/>
    <meta name="keywords" content="Biz-Create"/>
    <title> Crear Negocio | ZapatosGuanajuato.com</title>
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
        {{-- end local --}}

        {{-- online --}}
              <link rel="stylesheet" href="{{ URL::asset('css/online/bootstrap-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/fonts-min.css')}}">
                <link rel="stylesheet" href="{{ URL::asset('css/online/main-min.css')}}">
                <link rel="stylesheet" href="{{URL::asset('css/online/admin-min.css')}}">
        {{-- end online --}}
    {{-- style --}}

    {{-- scripts --}}
        {{-- sripts local --}}
        {{-- endsripts local--}}

        {{-- scripts online --}}
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
            <h1>Create Biz</h1>
        </div>

        <div class="admin-container-control">
            <form action="{{route('Biz.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="row">
                    <label for="bizId" class="form-control bg-light">ID</label>
                    <input type="text" name="bizId" class="form-control" disabled>
                </div>

                <div class="row">
                    <label for="bizName" class="form-control bg-light">Name</label>
                    <input type="text" name="bizName" class="form-control" value="{{old('bizName')}}">
                    {{-- Error --}}
                    @error('bizName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="bizSlug" class="form-control bg-light">Slug</label>
                    <input type="text" name="bizSlug" class="form-control" value="{{old('bizSlug')}}">
                    {{-- Error --}}
                    @error('bizName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="bizStreetNum" class="form-control bg-light">Street #</label>
                    <input type="text" name="bizStreetNum" class="form-control" value="{{old('bizStreetNum')}}">
                    {{-- Error --}}
                    @error('bizStreetNum')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Neigborhood --}}
                <div class="row">
                    <label for="bizNeigborhood" class="form-control bg-light">Neighborhood</label>
                    <input type="text" name="bizNeigborhood" class="form-control" value="{{old('bizNeigborhood')}}">
                    {{-- Error --}}
                    @error('bizNeigborhood')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- State --}}
                <div class="row">
                    <label for="bizState" class="form-control bg-light">State</label>
                    <input type="text" name="bizState" class="form-control" value="{{old('bizSate')}}">

                    {{-- Error --}}
                    @error('bizState')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                {{-- City --}}
                <div class="row">
                    <label for="bizCity" class="form-control bg-light">City</label>
                    <input type="text" name="bizCity" class="form-control" value="{{old('bizCity')}}">
                    {{-- Error --}}
                    @error('bizCity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- latitud longitud --}}
                <div class="row">
                    <div class="col">
                        <label for="bizLat" class="form-control bg-light">Latitude</label>
                        <input type="text" name="bizLat" class="form-control" value="{{old('bizLat')}}">
                        {{-- Error --}}
                        @error('bizLat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="bizLon" class="form-control bg-light">Longitud</label>
                        <input type="text" name="bizLon" class="form-control" value="{{old('bizLon')}}">
                        {{-- Error --}}
                        @error('bizLon')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Tel --}}
                <div class="row">
                    <label for="bizTel" class="form-control bg-light">Tel</label>
                    <input type="tel" name="bizTel" class="form-control" value="{{old('bizTel')}}">

                    {{-- Error --}}
                    @error('bizTel')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Contact --}}
                <div class="row">
                    <label for="bizContact" class="form-control bg-light">Contact</label>
                    <input type="text" name="bizContact" class="form-control" value="{{old('bizContact')}}">
                    {{-- Error --}}
                    @error('bizContact')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="bizWhatsApp" class="form-control bg-light">WhatsApp</label>
                    <input type="text" name="bizWhatsApp" class="form-control" value="{{old('bizWhatsApp')}}">
                    {{-- Error --}}
                    @error('bizWhatsApp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="bizFacebook" class="form-control bg-light">Facebook</label>
                    <input type="text" name="bizFacebook" class="form-control" value="{{old('bizFacebook')}}">
                    {{-- Error --}}
                    @error('bizFacebook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="bizWeb" class="form-control bg-light">Website</label>
                    <input type="text" name="bizWeb" class="form-control" value="{{old('bizWeb')}}">
                    {{-- Error --}}
                    @error('bizWeb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="bizEmail" class="form-control bg-light">Email</label>
                    <input type="email" name="bizEmail" class="form-control" value="{{old('bizEmail')}}">
                    {{-- Error --}}
                    @error('bizEmail')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="bizImage" class="form-control bg-light">Image</label>
                    <input type="file" name="bizImage" class="form-control" value="{{old('bizImage')}}">
                    {{-- Error --}}
                    @error('bizImage')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="bizcatId" class="form-control bg-light">BizcatID</label>
                    <select name="bizcatId" class="form-control dropdown w-100">
                        <option value="">--Please choose an option--</option>
                        @foreach ($bizcategories as $bizcategory)
                            <option value="{{$bizcategory->bizcatId}}"> {{$bizcategory->bizcatName}} </option>
                        @endforeach
                    </select>
                    {{-- Error --}}
                    @error('bizcatId')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <label for="saletypeId" class="form-control bg-light">Sale Type</label>

                    <select name="saletypeId" class="form-control dropdown w-100">
                        <option value="">--Please choose an option--</option>
                        @foreach ($saletypes as $saletype)
                            <option value="{{$saletype->saletypeId}}"> {{$saletype->saletypeName}} </option>
                        @endforeach
                    </select>
                    {{-- Error --}}
                    @error('saletypeId')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{--Model Cat --}}
                <div class="row">
                    <label for="modelcat" class="form-control bg-light">ModelCategory</label>
                    <select name="modelcat" class="form-control dropdown w-100">
                        <option> --Please choose an option-- </option>
                        @foreach ($modelcategories as $modelcategory)
                            <option value="{{$modelcategory->modelcatId}}">{{$modelcategory->modelcatName}}</option>
                        @endforeach
                    </select>
                </div>

                {{--ModelCat II --}}
                <div class="row">
                    <fieldset>
                        @foreach ($modelcategories as $modelcategory)
                            <input type="checkbox" name="modelcatid[]" value="{{$modelcategory->modelcatId}}">
                            <label for="modelcat">{{$modelcategory->modelcatName}}</label>
                        @endforeach
                    </fieldset>
                </div>


                {{-- last visit --}}
                <div class="row">
                    <label for="bizLastvisit" class="form-control">Last Visit</label>
                    <input type="date" name="bizLastvisit" class="form-control" value="{{old('bizLastvisit')}}">
                </div>



                {{-- control --}}
                <div class="admin-control-buttons" >
                    <input type="submit" value="Create" class="btn btn-sm btn-primary">
                    <a href="/Biz" class="btn btn-sm btn-danger">Cancel</a>
                </div>
            </form>
        </div>
        @endsection
    </x-layout>

</html>
