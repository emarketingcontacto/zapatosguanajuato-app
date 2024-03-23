@php
    $description = str_replace(" ", "_", "El catálogo más completo de zapatos en Guanajuato Compra al mayoreo de los mejores fabricantes y surte tu negocio. ¡Aprovecha nuestras ofertas!");
@endphp
<x-layout pageTitle="Catalogo de Calzado" pageDescription={{$description}}>

@section('main-content')

<div class="container d-flex flex-column">

<h1 class="text-center"> Política de Privacidad</h1>

<h2>La protección de tu privacidad es nuestra máxima prioridad </h2>

    <span>
        <strong>Solucion-e.com.mx </strong>toma en serio la privacidad de tu información personal y se compromete a protegerla.
    </span>
<br>
    <span>
        Esta Política de privacidad explica cómo recopilamos, usamos, divulgamos y almacenamos tu información personal cuando visitas y utilizas nuestro sitio web.
    </span>
<br>

    <h3>¿Qué información recopilamos? </h3>
    <span>
        Podemos recopilar los siguientes tipos de información personal tuya:
    </span>
    <span>
        <ul>
            <li>Información de contacto:** Nombre, dirección de correo electrónico, número de teléfono, dirección postal.</li>
            <li>Información de usuario:** Nombre de usuario, contraseña, fecha de nacimiento, datos demográficos (como edad, género, ubicación).</li>
            <li>Información técnica:** Dirección IP, tipo de navegador, sistema operativo, historial de navegación, información del dispositivo.</li>
            <li>Información de contenido:** Cualquier contenido que envíes al Sitio web, como comentarios, publicaciones en el foro, reseñas o comentarios.</li>
        </ul>
    </span>

<br>

<h3>¿Cómo usamos tu información?</h3>
<span>
    Podemos usar tu información personal para los siguientes fines:
</span>
<span>
    <ul>
        <li>Brindar y mejorar el Sitio web y sus funciones, incluido contenido y recomendaciones personalizados.</li>
        <li>Enviarte información importante sobre el Sitio web, como cambios en nuestros términos de servicio o política de privacidad.</li>
        <li>Enviarte comunicaciones de marketing, como boletines informativos, ofertas promocionales y encuestas (puedes darte de baja de estas comunicaciones en cualquier momento).</li>
        <li>Analizar tu uso del Sitio web para mejorar nuestros servicios.</li>
        <li>Cumplir con las obligaciones legales, hacer cumplir nuestras políticas y resolver disputas.</li>
    </ul>
</span>

<span class="alert alert-danger">
    Nunca venderemos ni compartiremos tu información personal con terceros para sus propios fines de marketing sin tu consentimiento.
</span>
<br>
<h3>Seguridad de los datos:</h3>

<span>
    Hemos implementado medidas técnicas y organizativas adecuadas para proteger tu información personal del acceso, divulgación, alteración o destrucción no autorizados. Sin embargo, ningún método de transmisión a través de Internet o método de almacenamiento electrónico es 100% seguro. Por lo tanto, no podemos garantizar la seguridad absoluta de tu información personal.
</span>
<br>
<h3>Tus opciones:</h3>

<span>
    <ul>
        <li>Tienes derecho a acceder, actualizar o eliminar tu información personal.</li>
        <li>También puedes optar por no recibir comunicaciones de marketing en cualquier momento.</li>
    </ul>
</span>
<span>
    Puedes ejercer estos derechos poniéndote en contacto con nosotros en <a href="mailto:contacto@solucion-e.com.mx" class="text-muted">contacto@solucion-e.com.mx</a>
</span>

<br>
<h3>Cambios a esta Política de privacidad:</h3>
<span>Podemos actualizar esta Política de privacidad de vez en cuando. </span>
<span>Te notificaremos los cambios publicando la nueva Política de privacidad en el Sitio web. </span>
<span>Se te recomienda revisar esta Política de privacidad periódicamente para ver si hay cambios.</span>

<br>
<h3>Contacto:</h3>

<span>
    Si tienes alguna pregunta sobre esta Política de privacidad, comunícate con nosotros en <a href="mailto:contacto@solucion-e.com.mx" class="text-muted">contacto@solucion-e.com.mx</a>
</span>

<br>
<h3>Transparencia y confianza:</h3>

<span>
    Entendemos que tu privacidad es importante para ti. Nos comprometemos a ser transparentes sobre cómo recopilamos, usamos y compartimos tu información personal.
</span>
<span>
    Te animamos a que revises esta Política de privacidad cuidadosamente y que te pongas en contacto con nosotros si tienes alguna pregunta o inquietud.
</span>

<br>

</div>
@endsection
</x-layout>
