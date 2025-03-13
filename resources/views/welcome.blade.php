@php
    // $description = str_replace(" ", "_", "Encuentra el catálogo más completo de zapatos en Guanajuato Compra al mayoreo de los mejores fabricantes y surte tu negocio. ¡Aprovecha nuestras ofertas!");
    $description ="Directorio de fabricantes, mayoristas y menudistas de calzado hecho en el estado de Guanajuato - Lista de contactos directos de cada proveedor";
@endphp

{{-- <x-layout pageTitle="Directorio de Zapatos Guanajuato" pageDescription={{$description}}> --}}
<x-layout pageTitle="Directorio de Zapatos Guanajuato" :pageDescription=$description>
    @section('main-content')
        @include('/partials/_hero')
        <div class="main-conteiner">
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

