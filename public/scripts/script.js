document.onload = getSuccess();

function getSuccess() {

    setTimeout(function () {
        var success = document.getElementById('success');
        if (success !== null) {
            success.style.display = "none";
        } }, 5000)
}


function openModelos() {
    console.log('open');
    document.getElementById('divmodelos').style.visibility = 'visible';
    document.getElementById('iclose').style.display = 'block';
    document.getElementById('iopen').style.display = 'none';
    document.getElementById('textmodelos').innerText = 'Ocultar Modelos';
}

function closeModelos() {
    document.getElementById('divmodelos').style.visibility = 'hidden';
    document.getElementById('iclose').style.display = 'none';
    document.getElementById('iopen').style.display = 'block';
    document.getElementById('textmodelos').innerText = 'Ver Modelos';
}

