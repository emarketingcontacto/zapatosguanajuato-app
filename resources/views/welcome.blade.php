{{-- @extends('layout') --}}
@php
    $description = str_replace(" ", "_", "Encuentra el catálogo más completo de zapatos en Guanajuato Compra al mayoreo de los mejores fabricantes y surte tu negocio. ¡Aprovecha nuestras ofertas!");
@endphp
<x-layout pageTitle="Directorio de Zapatos Guanajuato" pageDescription={{$description}}>
@section('main-content')

@include('/partials/_hero')


<div class="main-content">
    {{-- AIDA --}}

    {{-- ATTENTION --}}
    <div class="attention bg-light">
        <h4>
            ¿Estás buscando una forma segura y confiable de llevar tu negocio de zapatos al siguiente nivel?
        </h4>
        <div class="d-flex w-100 justify-content-center">
            <h2>El Directorio de Zapatos Guanajuato es la solución perfecta para tí!.</h2>
        </div>
    </div>
       {{-- END ATTENTION --}}

        {{-- Galery --}}
        <x-GalleryFront></x-GalleryFront>
        {{-- End Galery --}}

       {{--  INTEREST --}}
        <div class="interest">
            <div class="interest-left">
               <div class="interest-left-img">
                <span class="material-symbols-outlined">loyalty </span>
               </div>
               <div class="interest-text">
                    <h3>
                        Te brindamos acceso directo sin intermediarios y sin comisiones a los mejores fabricantes,
                        mayoristas y minoristas del mercado de zapatos del Estado de Guanajuato
                    </h3>
                </div>
            </div>

            <div class="interest-right">
                <div class="interest-right-img">
                    <span class="material-symbols-outlined">detection_and_zone</span>
                </div>
                <div class="interest-text">
                    <h3>Nuestras estrategias físicas y digítales de seguridad garantizan que los negocios dentro del Directorio de Zapatos de Guanajuato sean negocios activos y listos para recibir pedidos </h3>
                </div>
            </div>
        </div>
       {{-- END INTEREST --}}

         {{--  INTEREST A --}}
         <div class="Buttons">
            <div class="buttonA-image">
                <span class="material-symbols-outlined">visibility</span>
            </div>
            <div class="buttonA-text">
                <span>
                    Buscamos sólo las mejores marcas y las tiendas más reconocidas para hacer crecer tu negocio de venta de zapatos ya sea en mayoreo, menudeo o directamente con los mejores fabricantes
                </span>
            </div>

            <div class="buttonA-image">
                <span class="material-symbols-outlined ">lock</span>
            </div>
            <div class="buttonA-text">
                <span>
                    Veríficamos físicamente cada localización de cada uno de los fabricantes, mayoristas y minoristas anunciados en nuesto Directorio para asegurar que sean negocios activos para hacer negocios de manera segura y confiable.
                </span>
            </div>

            <div class="buttonA-image">
                <span class="material-symbols-outlined">stars</span>
            </div>
            <div class="buttonA-text">
                <span>
                    Tú mismo junto con los miembros del Directorio de Zapatos Guanajuato calíficas a cada uno de nuestros proveedores, lo que permite
                    identificar a los proveedores de calzado más confiables, con los mejores productos y con el mejor servicio para los miembros de nuestro Directorio.
                </span>
            </div>
         </div>
         {{-- END INTEREST A --}}

         {{-- DESIRE --}}
         <div class="desire d-flex flex-column" style="padding-bottom: 3rem">
            <span class="text-center">
                    <span class="fw-bolder ft-italic">"</span>
                     Imagina tener acceso al mejor <strong>Directorio de Zapatos del Estado de Guanajuato</strong> con los mejores fabricantes, mayoristas y menudistas de
                    zapatos, con medidas de seguridad que te brinden la tranquilidad que necesitas para hacer transacciones seguras<span class="text-bold">"</span>
                    <br/>
            </span>
            <p class="mt-5 text-center secondary-text"> Con nuestro Directorio de Zapatos de Guanajuato, puedes hacer realidad ese sueño ! .</p>
         </div>
         {{-- END DESIRES --}}

</div>
@endsection

</x-layout>

