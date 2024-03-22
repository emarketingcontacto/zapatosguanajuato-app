{{-- @extends('layout') --}}
<x-layout pageTitle="Catalogo de Calzado" pageDescription="Catalogo de Fabricantes de Zapatos, Catalogo de Mayoristas de Zapatos y Tiendas de Zapatos en Guanajuato">
@section('main-content')

@include('/partials/_hero')


<div class="main-content">
    {{-- AIDA --}}

    {{-- ATTENTION --}}
    <div class="attention bg-light">
        <h2>
            ¿Estás buscando una forma segura y confiable de llevar tu negocio de zapatos al siguiente nivel?
        </h2>
        <h4>Tenemos la solución perfecta para ti.</h4>
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
                <h3>
                    Te brindamos acceso a los mejores fabricantes,
                    tiendas mayoristas y tiendas minoristas del mercado de zapatos
                </h3>
            </div>

            <div class="interest-right">
                <div class="interest-right-img">
                    <span class="material-symbols-outlined">detection_and_zone</span>
                </div>
                <h3>Basamos nuestras medidas de seguridad con estrategias físicas y digítales</h3>
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
                    Buscamos sólo las mejores marcas y las tiendas más reconocidas
                </span>
            </div>

            <div class="buttonA-image">
                <span class="material-symbols-outlined ">lock</span>
            </div>
            <div class="buttonA-text">
                <span>
                    Veríficamos físicamente cada fabricante, mayorista y minorista para asegurarnos que estén activos y listos para hacer negocios.
                </span>
            </div>

            <div class="buttonA-image">
                <span class="material-symbols-outlined">stars</span>
            </div>
            <div class="buttonA-text">
                <span>
                    Calíficamos a cada uno de nuestros proveedores, lo que nos permite
                    identificar a los más confiables y recomendados por otros miembros de
                    nuestra comunidad.
                </span>
            </div>
         </div>
         {{-- END INTEREST A --}}

         {{-- DESIRE --}}
         <div class="desire d-flex flex-column" style="padding-bottom: 3rem">
            <span>
                    <span class="fw-bolder ft-italic">"</span>
                     Imagina tener acceso a una lista completa de los mejores proveedores, fabricantes y mayoristas de
                    zapatos, contamos con medidas de seguridad físicas y en linea que te
                    brinden la tranquilidad que necesitas para hacer transacciones seguras<span class="text-bold">"</span>
                    <br/>
            </span>
            <p class="mt-5 text-center secondary-text"> Con nuestro sitio de membresía, puedes hacer realidad ese sueño ! .</p>
         </div>
         {{-- END DESIRES --}}

</div>
@endsection

</x-layout>

