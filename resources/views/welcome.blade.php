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
            <div class="attention bg-light">
                <h4>
                    ¿Estás buscando una forma segura y confiable de llevar tu negocio de zapatos al siguiente nivel?
                </h4>
                <div class="d-flex w-100 justify-content-center">
                    <h2>El Directorio de Zapatos Guanajuato es la solución perfecta para tí!.</h2>
                </div>
            </div>
            {{-- END ATTENTION --}}

            {{--  INTEREST --}}
            <div class="interest">
                <div class="interest-left">
                    <div class="interest-left-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-universal-access-circle" viewBox="0 0 16 16">
                            <path d="M8 4.143A1.071 1.071 0 1 0 8 2a1.071 1.071 0 0 0 0 2.143m-4.668 1.47 3.24.316v2.5l-.323 4.585A.383.383 0 0 0 7 13.14l.826-4.017c.045-.18.301-.18.346 0L9 13.139a.383.383 0 0 0 .752-.125L9.43 8.43v-2.5l3.239-.316a.38.38 0 0 0-.047-.756H3.379a.38.38 0 0 0-.047.756Z"/>
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8"/>
                            </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                            </svg>
                    </div>
                    <div class="interest-text">
                        <h3>Nuestras estrategias físicas y digítales de seguridad garantizan que los negocios dentro del Directorio de Zapatos de Guanajuato sean negocios activos y listos para recibir pedidos </h3>
                    </div>
                </div>
            </div>
            {{-- END INTEREST --}}

            {{-- Galery Last Models --}}
            <x-GalleryFront></x-GalleryFront>
            {{-- End Galery Last Models--}}

            {{--  INTEREST A --}}
            <div class="Buttons">
                <div class="buttonA-image">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
                        <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4m2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A2 2 0 0 0 8 6c-.532 0-1.016.208-1.375.547M14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
                        </svg>
                </div>
                <div class="buttonA-text">
                    <span>
                        Buscamos sólo las mejores marcas y las tiendas más reconocidas para hacer crecer tu negocio de venta de zapatos ya sea en mayoreo, menudeo o directamente con los mejores fabricantes
                    </span>
                </div>

                <div class="buttonA-image">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                        </svg>
                </div>
                <div class="buttonA-text">
                    <span>
                        Veríficamos físicamente cada localización de cada uno de los fabricantes, mayoristas y minoristas anunciados en nuesto Directorio para asegurar que sean negocios activos para hacer negocios de manera segura y confiable.
                    </span>
                </div>

                <div class="buttonA-image">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707z"/>
                        <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018"/>
                        </svg>
                </div>
                <div class="buttonA-text">
                    <span>
                        Tú mismo junto con los miembros del Directorio de Zapatos Guanajuato calíficas a cada uno de nuestros proveedores, lo que permite
                        identificar a los proveedores de calzado más confiables, con los mejores productos y con el mejor servicio para los miembros de nuestro Directorio.
                    </span>
                </div>
            </div>
            {{-- END INTEREST A --}}

            {{-- Most Factories --}}
                <x-most-factories></x-most-factories>
            {{-- End Most Factories --}}

            {{-- Most Wholesalers --}}
            <x-most-wholesalers></x-most-wholesalers>
            {{-- End Most Wholesalers --}}

            {{-- Most Retailers --}}
            <x-most-retailers></x-most-retailers>
            {{-- End Most Retailers --}}

            {{--Categories-front--}}
            <x-categories-front></x-categories-front>
            {{--End Categories-front--}}

            {{-- Subcategories-Front --}}
            <x-front-subcategories></x-front-subcategories>
            {{-- Subcategories-Front --}}

            {{--Genders--}}
            <x-genders></x-genders>
            {{--Genders--}}



        </div>

        {{-- ATTENTION --}}
            <div class="attention">
                <h3>Visita a estos excelentes negocios, ahorra dinero y evita robos, cada semana añadimos nuevos espacios!</h3>
                <h4>¿Quieres que tu negocio aparezca en nuestro sitio?</h4>
                    <a class="btn-link" href="{{route('Contacto')}}">Añade tu negocio</a>
            </div>
        {{-- END ATTENTION --}}

        {{-- DESIRE --}}
        {{-- <div class="desire d-flex flex-column" style="padding-bottom: 3rem">
            <span class="text-center">
                    <span class="fw-bolder ft-italic">"</span>
                    Imagina tener acceso al mejor <strong>Directorio de Zapatos del Estado de Guanajuato</strong> con los mejores fabricantes, mayoristas y menudistas de
                    zapatos, con medidas de seguridad que te brinden la tranquilidad que necesitas para hacer transacciones seguras<span class="text-bold">"</span>
                    <br/>
            </span>
            <p class="mt-5 text-center secondary-text"> Con nuestro Directorio de Zapatos de Guanajuato, puedes hacer realidad ese sueño ! .</p>
        </div> --}}
        {{-- END DESIRES --}}

    @endsection
</x-layout>

