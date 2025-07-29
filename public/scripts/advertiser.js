function selectMonthly() {
    const advAnual = document.getElementById('adv-anual').style.display = 'none';
    const advMonthly = document.getElementById('adv-mensual').style.display = 'block';

    document.getElementById('checkAnual').checked = false;

    document.getElementById('btnMensual').style.display = "block";
    document.getElementById('btnAnual').style.display = "none";
}


function selectAnual() {
    document.getElementById('adv-anual').style.display = 'block';
    document.getElementById('adv-mensual').style.display = 'none';

    document.getElementById('checkMensual').checked = false;

    document.getElementById('btnMensual').style.display = "none";
    document.getElementById('btnAnual').style.display = "block";
}
