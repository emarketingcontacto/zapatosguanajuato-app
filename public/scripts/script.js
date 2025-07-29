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

async function getBizCat() {
    const currentUrl = window.location.origin;
    let bizId = document.getElementById('selectBizId').value;
    const url = currentUrl + '/api/v1/ApiBiz/' + `${bizId}`;

    const request = new Request(url,
        {
            method: "GET",
            mode: "cors",
            headers: {
                "Content-Type": "application/json"
            }
        });
    await fetch(request)
        .then((response) => response.json())
        .then((data) => {
            // console.log(data);
            document.getElementById('bizcatId').value = (data[0].bizcatId);
            document.getElementById('bizcatName').value =(data[0].bizcatName);
        }).catch((err) => {
            console.log(err)
        })
}

