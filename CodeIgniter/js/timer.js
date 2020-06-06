const startHr = 23;  // Nbre d'heures de base
const startMin = 60;  // Nbre de minutes de base
let timehr = startHr * 60;
let timemin = startMin * 60;


// document.getElementById('hrs').value = valeur_cherchee;
// document.getElementById('min').value = valeur_cherchee;
// document.getElementById('sec').value = valeur_cherchee;

// choice = select.selectedIndex; // Récupération de l'index du <option> choisi
// valeur_cherchee = select.options[choice].value; // Récupération du texte du <option> d'index "choice"



let refresh = setInterval(countDown, 1000);

function countDown() {
    timemin--;
    let hours = Math.floor(timehr / 60);
    let minutes = Math.floor(timemin / 60);
    let secondes = timemin % 60;
    let timer = document.getElementById("timer");
    
    secondes = secondes < 10 ? '0' + secondes : secondes;
    
    //// ----- Animation ----
    if ((minutes < 10) && (minutes >= 5)) {
        timer.style.color = '#2ECC72';
        timer.style.transition ="all .5s";
    } else if ((minutes < 5) && (minutes >= 2)) {
        timer.style.color = '#ffe100';
        timer.style.transition ="all .5s";
    } else if(minutes < 2){
        timer.style.color = '#ff3845';
        // timer.style.color = '#ffa200';
        timer.style.transition ="all .5s";
    } 
    display = `${hours}:${minutes}:${secondes}`;
    timer.innerHTML = display;
    if((minutes <= 0) && (secondes <= 0)){
        timehr = 0;
    }
    if ((timehr === 0) && (timemin === 0)) {
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