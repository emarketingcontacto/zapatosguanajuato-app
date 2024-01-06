document.onload = getSuccess();

function getSuccess() {

    setTimeout(function () {
        var success = document.getElementById('success');
        if (success !== null) {
            success.style.display = "none";
        } }, 5000)
}
