function selectMonthly() {
    const advAnual = document.getElementById('adv-anual').style.display = 'none';
    const advMonthly = document.getElementById('adv-mensual').style.display = 'inline-table';

    document.getElementById('checkAnual').checked = false;

    document.getElementById('btnMensual').style.display = "inline-table";
    document.getElementById('btnAnual').style.display = "none";
}


function selectAnual() {
    document.getElementById('adv-anual').style.display = 'inline-table';
    document.getElementById('adv-mensual').style.display = 'none';

    document.getElementById('checkMensual').checked = false;

    document.getElementById('btnMensual').style.display = "none";
    document.getElementById('btnAnual').style.display = "inline-table";
}
