<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    {{-- seo --}}
        <title>Modelo Editar | ZapatosGuanajuato.com</title>
        <meta name="description" content="Modelo Editar"/>
        <meta name="keywords" content="Modelo Editar"/>
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
        <h1>Edit Modelo</h1>
    </div>

    <div  class="container mb-5">


        <form action="{{route('Modelo.update',['modelo'=>$modelo])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Id --}}
            <div class="mb-3">
                <label for="modelId" class="form-label">ID</label>
                <input type="number" name="modelId" class="form-control w-25" disabled value="{{$modelo->modelId}}">
            </div>

            {{-- modelName --}}
            <div class="mb-3">
                <label for="modelName" class="form-label">Model Name</label>
                <input type="text" name="modelName" class="form-control w-25" value="{{$modelo->modelName}}" >
                <p class="form-text">Most be 3 characters lenght</p>
                {{-- Error --}}
                @error('modelName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- modelPrice --}}
            <div class="mb-3">
                <label for="modelPrice" class="form-label">Model Price</label>
                {{-- <input type="text" name="modelPrice" class="form-control w-25" value="{{$modelo->modelPrice}}"> --}}
                <input type="text" name="modelPrice" class="form-control w-25" value="${{ number_format($modelo->modelPrice,2,'.',',')}}">

                {{-- Error --}}
                @error('modelPrice')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- modelImage --}}
            <div class="mb-3">
                <label for="modelImage">Model Image</label>
                {{-- local --}}
                {{-- <img src="{{asset('storage/'.$modelo->modelImage)}}" alt="{{$modelo->modelImage}}" width="500vw"> --}}
                {{-- online --}}
                <img src="{{asset('/'.$modelo->modelImage)}}" alt="{{$modelo->modelImage}}" width="500vw">
                <input type="file" name="modelImage" class="form-control w-25" value="{{$modelo->modelImage}}">
            </div>
            <div class="mb-3">
                {{-- Error --}}
                @error('modelImage')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- modelImage --}}

            {{-- modelMaterial --}}
            <div class="mb-3">
                <label for="materialId" class="form-control bg-light">Material</label>
                <select name="materialId" class="form-control dropdown w-100">
                    <option value="">--Please choose an option--</option>
                    @foreach ($materials as $material)
                        @if ($material->materialId === $modelo->materialId)
                            <option value="{{$material->materialId}}" selected>{{$material->materialName}}</option>
                        @endif
                        <option value="{{$material->materialId}}"> {{$material->materialName}} </option>
                    @endforeach
                </select>
                {{-- Error --}}
                @error('materialId')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Seasson --}}
            <div class="mb-3">
                <label for="seassonId" class="form-control bg-light">Seasson</label>
                <select name="seassonId" class="form-control dropdown w-100">
                    <option value="">--Please choose an option--</option>
                    @foreach ($seassons as $seasson)
                    @if ($seasson->seassonId === $modelo->seassonId)
                        <option value="{{$seasson->seassonId}}" selected>{{$seasson->seassonName}}</option>

                    @endif
                        <option value="{{$seasson->seassonId}}"> {{$seasson->seassonName}} </option>
                    @endforeach
                </select>
                {{-- Error --}}
                @error('seassonId')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{--modelSubcategories--}}
            <div class="mb-3">
                <label for="modelsubcatId" class="form-control bg-light">Modelo Sub Category</label>
                <select name="modelsubcatId" class="form-control drop-down w-100">
                    <option value="">--Please choose an option--</option>
                    @foreach ($modelsubcategories as $modelsubcategory)
                        <option value="{{$modelsubcategory->modelsubcatId}}" @php echo ($modelsubcategory->modelsubcatId === $modelo->modelsubcatId) ? 'selected' : '';@endphp>{{$modelsubcategory->modelsubcatName}}</option>
                    @endforeach
                </select>
            </div>
            {{--modelSubcategories--}}

            {{--modelcategories--}}
            <div class="mb-3">
                <label for="modelcatId" class="form-control bg-light">Modelo Category</label>
                <select name="modelcatId" class="form-control drop-down w-100">
                    <option value="">--Please choose an option--</option>
                    @foreach ($modelcategories as $modelcategory)
                        <option value="{{$modelcategory->modelcatId}}" @php echo ($modelcategory->modelcatId === $modelo->modelcatId) ? 'selected' : '';@endphp>{{$modelcategory->modelcatName}}</option>
                    @endforeach
                </select>
                {{-- Error --}}
                @error('modelcatId')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{--modelcategories--}}


            {{-- Biz --}}
            <div class="mb-3">
                <label for="bizId" class="form-control bg-light">Biz</label>
                <select name="bizId" class="form-control dropdown w-100">
                    <option value="">--Please choose an option--</option>
                    @foreach ($business as $biz)
                    @if ($biz->bizId === $modelo->bizId)
                        <option value="{{$biz->bizId}}" selected> {{$biz->bizName}}</option>
                    @endif
                        <option value="{{$biz->bizId}}"> {{$biz->bizName}} </option>
                    @endforeach
                </select>
                {{-- Error --}}
                @error('bizId')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- controls --}}
            <div class="admin-control-buttons">
                <input type="submit" value="Update" class="btn btn-sm btn-primary">
                <a href="/Modelo" class="btn btn-sm btn-danger">Cancel</a>
            </div>
        </form>
    </div>
    </div-container>
    @endsection
</x-layout>
