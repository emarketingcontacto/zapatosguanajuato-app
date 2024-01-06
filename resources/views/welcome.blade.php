@extends('layout')

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

       {{--  INTEREST --}}
        <div class="interest">
            <div class="interest-left">
               <div class="interest-left-img">
                <span class="material-symbols-outlined">loyalty </span>
               </div>
                <span>
                    Te brindamos acceso a los mejores fabricantes,
                    tiendas mayoristas y minoristas del mercado de zapatos
                </span>
            </div>

            <div class="interest-right">
                <div class="interest-right-img">
                    <span class="material-symbols-outlined">detection_and_zone</span>
                </div>
                <span>Basamos nuestras medidas de seguridad con estrategias físicas y digítales</span>
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
                    Veríficamos físicamente cada negocio para asegurarnos que estén activos y listos para hacer negocios.
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

         <div class="desire">
            <span>
                <h3>
                    <span class="fw-bolder fst-italic fs-3">"</span>
                     Imagina tener acceso a una lista completa de los mejores proveedores de
                    zapatos, contando con las medidas de seguridad física y en linea que te
                    brinden la tranquilidad que necesitas para hacer transacciones seguras<span class="text-bold fs-1">"</span>
                    <br/>
                   <p class="mt-5 text-center secondary-text fs-3"> Con nuestro sitio de membresía, puedes hacer realidad ese sueño ! .</p>
                </h3>
            </span>
         </div>
         {{-- END DESIRES --}}

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

            <div class="paypalButtons">

                <div id="paypal-button-container-P-2N5747318J1225455MREGMDY"></div>

            </div>


                <script src="https://www.paypal.com/sdk/js?client-id=AbIQh2FbR_tDfsZYfD72KzDN10u-ol5aXjhnx5WoNG1tEWjYDZFvrYWBv-E2IpLzYU4qWO7ZWTD-GBFL&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
                <script>
                  paypal.Buttons({
                      style: {
                          shape: 'rect',
                          color: 'gold',
                          layout: 'vertical',
                          label: 'subscribe'
                      },
                      createSubscription: function(data, actions) {
                        return actions.subscription.create({
                          /* Creates the subscription */
                          plan_id: 'P-2N5747318J1225455MREGMDY'
                        });
                      },
                      onApprove: function(data, actions) {
                        alert(data.subscriptionID); // You can add optional success message for the subscriber here
                      }
                  }).render('#paypal-button-container-P-2N5747318J1225455MREGMDY'); // Renders the PayPal button
                </script>



</div>
@endsection

