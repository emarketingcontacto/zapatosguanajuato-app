@php
    // $description = str_replace(" ", "_", "El catálogo más completo de zapatos en Guanajuato Compra al mayoreo de los mejores fabricantes y surte tu negocio. ¡Aprovecha nuestras ofertas!");
    $description = "Somos el directorio más completo de proveedores de calzado en Guanajuato. !Aquí puedes contactar directamente a los mejores fabricantes y mayoristas para surtir tu negocio. ¡Aprovecha nuestras ofertas!";
    $keywords = "Directorio de calzado en Guanajuato, Directorio de zapatos de Guanajuato, Venta de calzado directo de fabrica";
@endphp
<x-layout pageTitle="Catalogo de Calzado" pageDescription={{$description}} keywords={{$keywords}}>

@section('main-content')

<div class="container aboutus-container">
<div class="title">
    <h1>Acerca de Nosotros</h1>
</div>
    <span>
        Somos un equipo de especialistas en píxeles y estrategas obsesionados con el crecimiento, impulsados por 17 años de experiencia en el siempre cambiante panorama digital.
        Desde capturar tu historia a través de fotografías asombrosas hasta convertirla en una presencia web perfecta y amplificarla a través de campañas dirigidas, somos tu ventanilla para crear un viaje digital que encienda tu marca y te impulse hacia el éxito.
    </span>
<br>
<h3 class="title">Nuestro Expertise esta enfocado en areas como:</h3>
    <div class="div-expertise">
            <div class="item-expertise">
                <h4>Fotografía digital:</h4>
                Creemos que las imágenes dicen más que mil palabras, y nuestros galardonados fotógrafos pintan la historia de tu marca con imágenes cautivadoras que resuenan con tu audiencia.
            </div>
            <div class="item-expertise">
                <h4>Desarrollo web:</h4>
                Vamos más allá de los píxeles y el código. Creamos sitios web funcionales y fáciles de usar que no solo son estéticamente agradables sino que también están optimizados para la conversión y el crecimiento.
            </div>
            <div class="item-expertise">
                <h4>Marketing digital: </h4>
                Somos estrategas basados en datos que entienden el pulso del mundo digital. Analizamos, diseccionamos e implementamos campañas exitosas en varios canales,
                generando tráfico dirigido y engagement.
            </div>
            <div class="item-expertise">
                <h4>Desarrollo de negocios:</h4>
                No somos solo comercializadores, somos tus socios de crecimiento. Entendemos los objetivos de tu negocio y los traducimos
                en estrategias accionables que brindan resultados impactantes.
            </div>
    </div>
</div>
@endsection
</x-layout>
