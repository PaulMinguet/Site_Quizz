const startMin = .5;  // Nbre de minutes de base
let time = startMin * 60;

const timer = document.getElementById("timer");

setInterval(countDown, 1000);

function countDown() {
    let minutes = Math.floor(time / 60);
    let secondes = time % 60;
    
    secondes = secondes < 10 ? '0' + secondes : secondes;
    
    if ((minutes < 10) && (minutes >= 5)) {
        timer.style.color = '#2ECC72';
        timer.style.transition ="all .5s"
        
    } else if ((minutes < 5) && (minutes >= 2)) {
        timer.style.color = '#ffe100';
        timer.style.transition ="all .5s"
    } else if(minutes < 2){
        timer.style.color = '#ff3845';
        // timer.style.color = '#ffa200';
        timer.style.transition ="all .5s"
    } else if ((minutes === 0) && (secondes === 0)){
        timer.innerHTML = "OVER !";
    }
    timer.innerHTML = `${minutes}:${secondes}`;
    time--;
}