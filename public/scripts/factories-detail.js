window.onload = () => {
    // let modal = document.getElementById('leadCaptureModal');
    // modal.addEventListener('click', (e) => {
    //     if (e.target.id === 'leadCaptureModal') {
    //         closeModal();
    //     }
    // });
}

function sendIntentData(e) {
    e.preventDefault();
    // get Intent Data
    var element = e.currentTarget;
    let proveedorAction = element.getAttribute('data-action');
    let proveedorName = element.getAttribute('data-proveedor-name');
    let proveedorEmail = element.getAttribute('data-proveedor-email');
    let proveedorTel = element.getAttribute('data-proveedor-tel');
    let proveedorFacebook = element.getAttribute('data-proveedor-facebook');
    let proveedorWeb = element.getAttribute('data-proveedor-url');
    let proveedorWhatsapp = element.getAttribute('data-proveedor-whatsapp');

    // save Intent Data
    dataLayer.push({
        'event': 'lead_proveedor_contact',
        'proveedor_name': proveedorName,
        'proveedor_action': proveedorAction,
        'conversion_type':'logged_in_access',
        'event_category': 'macro_conversion',
    });

    setTimeout(() => {
        switch (proveedorAction) {
            case 'mail':
                sendEmail(proveedorEmail);
            break;

            case 'telefono':
                makeCall(proveedorTel);
            break;

            case 'facebook':
                openFacebook(proveedorFacebook);
            break;


            case 'web':
                openWeb(proveedorWeb);
            break;

            case 'whatsapp':
                openWhatsApp(proveedorWhatsapp);
            break;

            default:
            break;
        }
        //Is mail
        if (proveedorAction === 'mail') {

        }
    }, 50)
}

function sendIntentDataNotLogged(e) {
    e.preventDefault();
    // get Intent Data
    var element = e.currentTarget;
    let proveedorAction = element.getAttribute('data-action');
    let proveedorName = element.getAttribute('data-proveedor-name');
    let proveedorSlug = element.getAttribute('data-proveedor-slug');

    // save Intent Data
    dataLayer.push({
        'event': 'redirect_to_register',
        'proveedor_name': proveedorName,
        'proveedor_action': proveedorAction,
        'event_category': 'micro_conversion',
    });

    //open user create
    // let urlDestination = "/User/create";
    let urlDestination = "/User/login";
    urlDestination += "?intended_action=" + proveedorAction;
    urlDestination += "&intended_proveedor=" + proveedorSlug;
    window.location.href = urlDestination;



}

function macroConversion(signup_slug, signup_action) {
    //Conversion exitosa
    dataLayer.push({
        'event': 'user_registration',
        'proveedor_name': signup_slug,
        'method': 'register_form',
        'registration_source': signup_action,
        'event_category': 'macro_conversion'
    });
    alert("Registro Exitoso! Gracias por unirte a ZapatosGuanajuato.mx");


 }

function sendEmail(proveedorEmail) {
    let mailtoLink = 'mailto:';
    mailtoLink += proveedorEmail;
    mailtoLink += '?subject=Contacto desde ZapatosGuanajuato.mx';
    window.location.href = mailtoLink;
}

function makeCall(proveedorTel) {
    let callto = 'tel:';
    callto += proveedorTel;
    //window.location.href = callto;
    window.open(callto, '_blank');

}

function openFacebook(proveedorFacebook) {
    window.open(proveedorFacebook,'_blank');
}

function openWeb(proveedorWeb) {
    window.open(proveedorWeb, '_blank');
}

function openWhatsApp(proveedorWhatsapp) {
    const message = 'Contacto de ZapatosGuanajuato.com';
    const encodedMessage = encodeURIComponent(message);

    let whatsUrl = 'https://wa.me/';
    whatsUrl += "52";
    whatsUrl += proveedorWhatsapp;
    whatsUrl += '?text=';
    whatsUrl += `${encodedMessage}`;
    window.open(whatsUrl, "_blank");
}




/*
function showModal(e) {
    let leadModal = document.getElementById('leadCaptureModal');
    leadModal.classList.add('is-visible');
}

function closeModal() {
    let leadModal = document.getElementById('leadCaptureModal');
    leadModal.classList.remove('is-visible');
}
*/











