const startMin = 60;  // Nbre de minutes de base
let time = startMin * 60;


let refresh = setInterval(countDown, 1000);

function countDown() {
    time--;
    let minutes = Math.floor(time / 60);
    let secondes = time % 60;
    let timer = document.getElementById("timer");
    
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
    } 
    display = `${minutes}:${secondes}`;
    timer.innerHTML = display;
    if (time === 0){
        // alert("OVER !");
        timer.innerHTML = "<span id='over' style='visibility:visible;'>OVER !</span>";
        let over = document.getElementById('over');
        clearInterval(refresh);
        function clignoter() {
            if (over.style.visibility=='visible') {
                over.style.visibility='hidden';
            } else {
                over.style.visibility='visible';
            }
        }
        periode = setInterval(clignoter, 400);
    }
}