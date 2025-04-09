@php
    // $description1 ="Conecta con fabricantes y mayoristas de calzado de Guanajuato. Ve modelos únicos, accede a contactos verificados y ahorra tiempo evitando estafas. ¡Descubre todo aquí!";
    $description ="Accede a contactos verificados de los principales fabricantes y productores de calzado de Guanajuato. !Descubre modelos únicos, ahorra tiempo y evita fraudes!";
    $keywords = "Directorio de Zapatos en Guanajuato, Fabricantes de calzado en Guanajuato, Fabricas de calzado de Guanajuato, Proveedores de Zapatos hechos en Guanajuato";
@endphp

{{-- <x-layout pageTitle="Directorio de Zapatos Guanajuato" pageDescription={{$description}}> --}}
<x-layout pageTitle="Directorio de Zapatos Guanajuato" :pageDescription=$description :keywords=$keywords>
    @section('main-content')
        @include('/partials/_hero')
        <div class="main-container">
            {{-- ATTENTION --}}
            <div class="attention">
                <h2>
                    Encuentra a los mejores proveedores de calzado para llevar tu negocio al siguiente nivel.
                </h2>
            </div>
            {{-- END ATTENTION --}}
            {{-- Galery Last Models --}}
            <x-GalleryFront></x-GalleryFront>
            {{-- End Galery Last Models--}}
            {{--Categories-front--}}
            <x-categories-front></x-categories-front>
            {{--End Categories-front--}}
            {{-- Subcategories-Front --}}
            <x-front-subcategories></x-front-subcategories>
            {{-- Subcategories-Front --}}
            {{--Genders--}}
             <x-genders></x-genders>
            {{--Genders--}}
            {{-- Most Factories --}}
                <x-most-factories></x-most-factories>
            {{-- End Most Factories --}}
            {{-- Most Wholesalers --}}
            <x-most-wholesalers></x-most-wholesalers>
            {{-- End Most Wholesalers --}}
            {{-- Most Retailers --}}
            <x-most-retailers></x-most-retailers>
            {{-- End Most Retailers --}}
        </div>
    @endsection
</x-layout>

