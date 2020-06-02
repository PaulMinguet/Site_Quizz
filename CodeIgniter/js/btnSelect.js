var nb1 = document.getElementById('nb1');
var nb2 = document.getElementById('nb2');
var nb3 = document.getElementById('nb3');
var nb4 = document.getElementById('nb4');
var each_quest = document.getElementsByClassName('each_quest');

var x, i, j, l, ll, selElmnt, a, b, c, body;
/* Rechercher tous les éléments avec la classe "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* Pour chaque élément, créer un nouveau DIV qui agira comme l'élément sélectionné: */
    a = document.createElement("DIV");
    body = document.querySelector("body");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* Pour chaque élément, créer un nouveau DIV qui contiendra la liste d'options: */
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /* Pour chaque option de l'élément de sélection d'origine,
        créer un nouveau DIV qui agira comme un élément optionnel: */
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
            /* Lorsqu'un élément est cliqué, 
            mettre à jour la boîte de sélection d'origine,
            et l'élément sélectionné: */
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        /* Lorsque la case de sélection est cliquée, 
        fermer toutes les autres cases de sélection,
        et ouvrir / fermer la boîte de sélection actuelle
        en colorant le numero correspondant : */
        // addQt();
        colorizeNB2();
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
    body.addEventListener("click", function (e) {
        e.stopPropagation();
        closeAllSelect(a);
        a.nextSibling.classList.add("select-hide");
        a.classList.add("select-arrow-active");
    });
}

// function addQt() {
//     each_quest.style.display = "none";
//     alert(i); // alert val clickée
    
// }
function colorizeNB2() {
	nb2.style.backgroundColor = 'red';
	nb1.style.backgroundColor = '#1A73E8';
	nb3.style.backgroundColor = '#1A73E8';
	nb4.style.backgroundColor = '#1A73E8';
}



function closeAllSelect(elmnt) {
    /* Fermer toutes les cases de sélection du document,
    sauf la case de sélection actuelle: */
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    // for (i = 0; i < xl; i++) {
    //     if (arrNo.indexOf(i)) {
    //         x[i].classList.add("select-hide");
    //     }
    // }
}

/* Si l'utilisateur clique n'importe où en dehors de la zone de sélection,
fermer toutes les cases de sélection: */
document.addEventListener("click", closeAllSelect);