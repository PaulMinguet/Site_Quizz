let progress = document.getElementById("progressbar");
let totalHeight = document.body.scrollHeight - window.innerHeight;

window.onscroll = function () {
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progress.style.height = progressHeight + "%";   
    progress.style.transition = 'all .3s';
}

window.onload = function () {
    progress.style.height = 0;   
    
}