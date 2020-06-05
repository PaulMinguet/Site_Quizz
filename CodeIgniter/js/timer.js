const tempsmax = 6;   // valeur pour la bd
let minutes = tempsmax - 1;
let secondes = 60;
let heures = 0;
if (tempsmax > 60) {
    heures = Math.trunc(tempsmax / 60);
	minutes = tempsmax - heures * 60 - 1;
}

let timer = document.getElementById("timer");
let refresh = setInterval(countDown, 1000);

    if (heures < 10) {
        heures = '0' + heures;
    }
    if (minutes < 10) {
        minutes = '0' + minutes;
    }
    if (secondes < 10) {
        secondes = '0' + secondes;
    } 

function countDown() {
    secondes--;
    if (secondes == 0) {
        minutes--;
    	secondes = 59;
    }
    if (minutes == 0) {
        heures--;
    	minutes = 59;
    }else if ((heures == 0) && (minutes == 0) && (secondes == 0)) {
        // alert("OVER !");
        timer.innerHTML = "<span id='over' style='visibility:visible;'>OVER !</span>";
        let over = document.getElementById('over');
        clearInterval(refresh);
    
        function clignoter() {
            if (over.style.visibility == 'visible') {
                over.style.visibility = 'hidden';
            } else {
                over.style.visibility = 'visible';
            }
        }
        periode = setInterval(clignoter, 400);
    }
   
   
    //// ----- Animation ----
    if ((heures == 0) && (minutes < 10) && (minutes >= 5)) {
        timer.style.color = '#2ECC72';
        timer.style.transition = "all .5s";
    } else if ((heures == 0) && (minutes < 5) && (minutes >= 2)) {
        timer.style.color = '#ffe100';
        timer.style.transition = "all .5s";
    } else if ((heures == 0) && minutes < 2) {
        timer.style.color = '#ff3845';
        // timer.style.color = '#ffa200';
        timer.style.transition = "all .5s";
    }
    display = `${heures}:${minutes}:${secondes}`;
    timer.innerHTML = display;
}

/* const startHr = 23; // Nbre d'heures de base
const startMin = 60; // Nbre de minutes de base
let timehr = startHr * 60;
let timemin = startMin * 60;


// document.getElementById('hrs').value = valeur_cherchee;
// document.getElementById('min').value = valeur_cherchee;
// document.getElementById('sec').value = valeur_cherchee;

// choice = select.selectedIndex; // Récupération de l'index du <option> choisi
// valeur_cherchee = select.options[choice].value; // Récupération du texte du <option> d'index "choice"




function countDown() {
    timemin--;
	let heures = Math.floor(timehr / 60);
	let minutes = Math.floor(timemin / 60);
	let secondes = timemin % 60;
    let timer = document.getElementById("timer");

	secondes = secondes < 10 ? '0' + secondes : secondes;
	minutes = minutes < 10 ? '0' + minutes : minutes;
	heures = heures < 10 ? '0' + heures : heures;

	//// ----- Animation ----
	if ((minutes < 10) && (minutes >= 5)) {
		timer.style.color = '#2ECC72';
		timer.style.transition = "all .5s";
	} else if ((minutes < 5) && (minutes >= 2)) {
		timer.style.color = '#ffe100';
		timer.style.transition = "all .5s";
	} else if (minutes < 2) {
		timer.style.color = '#ff3845';
		// timer.style.color = '#ffa200';
		timer.style.transition = "all .5s";
	}
	display = `${heures}:${minutes}:${secondes}`;
	timer.innerHTML = display;
	if ((minutes <= 0) && (secondes <= 0)) {
		timehr = 0;
	}
	if ((timehr === 0) && (timemin === 0)) {
		// alert("OVER !");
		timer.innerHTML = "<span id='over' style='visibility:visible;'>OVER !</span>";
		let over = document.getElementById('over');
		clearInterval(refresh);

		function clignoter() {
			if (over.style.visibility == 'visible') {
				over.style.visibility = 'hidden';
			} else {
				over.style.visibility = 'visible';
			}
		}
		periode = setInterval(clignoter, 400);
	}
} */