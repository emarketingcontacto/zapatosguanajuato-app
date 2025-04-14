{{-- @extends('layout') --}}
<x-layout pageTitle='Register' pageDescription="Pagina de Registro" keywords="Registro">

@section('main-content')
<div class="payments mb-5 pb-5">

  {{-- PAYPAL TEXT --}}
            <div class="paypal pt-5">
                <span class="pt-5">
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
            {{-- END PAYPAL TEXT --}}

            {{-- Paypal Buttons--}}
            {{-- <div class="paypalbuttons">
                <div id="paypal-button-container-P-70396561M81280630MX4NJZY"></div>
            </div> --}}
            {{-- EndPaypal Buttons--}}

            {{-- card-payments --}}
            <div class="card-payments d-flex justify-content-center align-items-center" style="width:100vw; heigth:50vh">
                    {{-- <div class="buttons-payments d-flex justify-content-center align-items-center" style="50vw" >
                        <a href="https://buy.stripe.com/5kA3d62t280R10IfYY" class="btn btn-primary btn-lg form-control-lg" style="width: 50vw">
                            <i class="bi bi-credit-card fs-1 pt-3px" ></i>
                            Realizar Pago Con Tarjeta</a>
                    </div> --}}

                    <div class="buttons-payments d-flex justify-content-center align-items-center bg-gray-300" style="50vw">
                        <script async src="https://js.stripe.com/v3/buy-button.js"></script>
                        <stripe-buy-button buy-button-id="buy_btn_1OxL2JRxi1sURpG4SVohhhBb" publishable-key="pk_live_51OwDydRxi1sURpG4V3heOuFCAtE2xUaALTlVWH5bYLxaYbT1d9cAVTIXjgDgJdZ25MdjjUM5ox9tj05JIMW5t13R00fbqanJhV">
                        </stripe-buy-button>
                    </div>

            </div>
            {{-- card-payments --}}
</div>

<script src="https://www.paypal.com/sdk/js?client-id=AbIQh2FbR_tDfsZYfD72KzDN10u-ol5aXjhnx5WoNG1tEWjYDZFvrYWBv-E2IpLzYU4qWO7ZWTD-GBFL&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
<script>
paypal.Buttons({
    style: {
        shape: 'rect',
        color: 'blue',
        layout: 'vertical',
        label: 'subscribe'
    },
    createSubscription: function(data, actions) {
        return actions.subscription.create({
        /* Creates the subscription */
        plan_id: 'P-70396561M81280630MX4NJZY'
        });
    },
    onApprove: function(data, actions) {
        alert(data.subscriptionID); // You can add optional success message for the subscriber here
    }
}).render('#paypal-button-container-P-70396561M81280630MX4NJZY'); // Renders the PayPal button
</script>

@endsection

</x-layout>
