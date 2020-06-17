var btnReset = document.getElementById('reset_btn');

function reset() {
    btnReset.addEventListener('click', window.location.reload(true));
}