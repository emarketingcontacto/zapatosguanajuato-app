window.onload = bannersShow();

async function bannersShow() {
    // Define the delay function
    const delay = ms => new Promise(res => setTimeout(res, ms));
    var banns = document.getElementsByClassName('banner');

    if (banns[banns.length - 1].style.display == 'flex') {
        banns[banns.length - 1].style.display = 'none';
    }

    for (let index = 0; index < banns.length; index++) {
        if (index == 0) {
            banns[index].style.display = 'flex';
        } else {
            banns[index - 1].style.display = 'none';
            banns[index].style.display = 'flex';
        }
        await delay(3000);
    }
    //delay = null;
    bannersShow()
}
