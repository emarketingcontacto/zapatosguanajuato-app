<link rel="stylesheet" href="{{ URL::asset('css/newsletter.css') }}" />
<x-layout pageTitle="Management" pageDescription="Users" keywords="User Create">

    @section('main-content')
    <div class="main-container">
        <div class="header-crud">
           <h1>Newsletter</h1>
        </div>
    <div class="newsletter-container">
        <div class="newsletter-invitation">
            <h2>¡No te pierdas nada del calzado de Guanajuato!</h2>
            <h3>¿Eres un apasionado de los zapatos?</h3>
            <h3>¿Te encanta descubrir las últimas tendencias y los mejores descuentos? </h3>
            <h3>¡Entonces nuestra newsletter de ZapatosGuanajuato.com es para ti!</h3>
            <h4>Al unirte a nuestra comunidad, serás el primero en enterarte de: </h4>
            <ul>
                <li>Noticias exclusivas del sector calzado en Guanajuato.</li>
                <li>Promociones y descuentos especiales de tus marcas favoritas.</li>
                <li>Lanzamientos de nuevos modelos y colecciones antes que nadie.</li>
                <li>Información privilegiada sobre las empresas más destacadas en la fabricación y venta de calzado en nuestro estado.</li>
            </ul>
            <h3 id="text-attention">¡Únete hoy mismo y mantente siempre a la vanguardia en el mundo del calzado guanajuatense!</h3>
        </div>
        <div class="newsletter-form">
            <div id="mc_embed_shell">
            <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{
                    background:#fff;
                    false;clear:left;
                    font:14px Helvetica,Arial,sans-serif;
                    width: 600px;
                }
                #mc_embed_signup .button{
                     background-color: #C9B8D4;
                     color: #1e0236;
                     margin-left: 98%;
                }
                #mc_embed_signup .button:hover{
                     background-color: #AAD4A3;
                }
                #mc_embed_signup_scroll h2{
                    text-align: center;
                    padding-top: 1vh;
                }
                .mc-field-group{
                    padding: 0 2vw;
                 }

                /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
                <form action="https://zapatosguanajuato.us16.list-manage.com/subscribe/post?u=948eabd2b6e2e810127ea36f7&amp;id=303dee11e4&amp;f_id=00f379e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                <div id="mc_embed_signup_scroll"><h2>Subscribete</h2>
                    <div class="indicates-required">
                        <span class="asterisk">*</span> dato requerido
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>
                        <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-FNAME">First Name </label>
                        <input type="text" name="FNAME" class=" text" id="mce-FNAME" value="">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-LNAME">Last Name </label>
                        <input type="text" name="LNAME" class=" text" id="mce-LNAME" value="">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-COMPANY">Company </label>
                        <input type="text" name="COMPANY" class=" text" id="mce-COMPANY" value="">
                    </div>
                    <div id="mce-responses" class="clear foot">
                        <div class="response" id="mce-error-response" style="display: none;"></div>
                        <div class="response" id="mce-success-response" style="display: none;"></div>
                    </div>
                    <div aria-hidden="true" style="position: absolute; left: -5000px;">
                        /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                        <input type="text" name="b_948eabd2b6e2e810127ea36f7_303dee11e4" tabindex="-1" value="">
                    </div>
                    <div class="optionalParent">
                        <div class="clear foot">
                            <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button btn-primary" value="Subscribe">
                        </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[6]='COMPANY';ftypes[6]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';/*
 * Translated default messages for the $ validation plugin.
 * Locale: ES
 */
$.extend($.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script></div>




    @endsection
</x-layout>
