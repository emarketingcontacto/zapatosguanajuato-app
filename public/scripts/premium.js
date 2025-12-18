function openStatus(e) {
    let status = e.target.id;
    console.log(status);

    if (status === "registrado") {
        document.getElementById('premiumRegistrados').style.display = "block";
        document.getElementById('premiumNoRegistrados').style.display = "none";
    } else {
        document.getElementById('premiumRegistrados').style.display = "none";
        document.getElementById('premiumNoRegistrados').style.display = "block";
    }
}


function openPeriod(e) {
    let period = e.target.value;
    let dateInputStart = document.getElementById('premiumStart');
    let dateInputEnd = document.getElementById('premiumEnd');
    let dateObj = dateInputStart.valueAsDate;
    console.log(dateObj);

    if (period === "1mes") {
        //Montly
        document.getElementById('month').style.display = "flex";
        document.getElementById('year').style.display = "none";
        dateObj.setDate(dateObj.getDate() + 28);
        dateInputEnd.valueAsDate = dateObj;
    }

    if (period === "1año") {
        //yearly
        document.getElementById('year').style.display = "flex";
        document.getElementById('month').style.display = "none";
        dateObj.setDate(dateObj.getDate() + 365);
        dateInputEnd.valueAsDate = dateObj;
    }

}
