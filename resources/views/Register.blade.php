<link rel="stylesheet" href="{{ URL::asset('css/register.css')}}">
{{-- @extends('layout') --}}
<x-layout pageTitle='Register' pageDescription="Pagina de Registro" keywords="Registro">

    @section('main-content')

        <div class="main-container">
        {{-- PAYPAL TEXT --}}
                    <div class="paypal">
                        <span>
                            Regístrate hoy mismo en nuestro sitio de membresía y descubre cómo podemos ayudarte a llevar tu
                            negocio de zapatos al siguiente nivel de forma segura y confiable.
                            <p>
                                ¡No pierdas la oportunidad de unirte a nuestra comunidad de expertos de la industria del calzado y tener
                                acceso a los recursos más valiosos para tu negocio!
                            </p>
                            <h2 class="text-center"> Acceso ilimitado por todo un año</h2>
                            <h1 class="text-center"> $499.00 MXN</h1>
                        </span>
                    </div>

                    {{-- card-payments --}}
                    <div class="card-payments">
                        <a href="https://buy.stripe.com/5kA3d62t280R10IfYY" class="btn btn-primary btn-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1"/>
                            </svg>
                            Unirme</a>
                            {{-- <div class="buttons-payments d-flex justify-content-center align-items-center bg-gray-300" style="50vw">
                                <script async src="https://js.stripe.com/v3/buy-button.js"></script>
                                <stripe-buy-button buy-button-id="buy_btn_1OxL2JRxi1sURpG4SVohhhBb" publishable-key="pk_live_51OwDydRxi1sURpG4V3heOuFCAtE2xUaALTlVWH5bYLxaYbT1d9cAVTIXjgDgJdZ25MdjjUM5ox9tj05JIMW5t13R00fbqanJhV">
                                </stripe-buy-button>
                            </div> --}}
                    </div>
                    {{-- end-card-payments --}}
        </div>
    @endsection
</x-layout>
