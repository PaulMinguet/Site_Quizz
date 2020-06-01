var nb1=document.getElementById('nb1');
var nb2=document.getElementById('nb2');
var nb3=document.getElementById('nb3');
var nb4=document.getElementById('nb4');

var area1=document.getElementById('nomqz');
var area2=document.getElementById('nbr');
var area3=document.getElementById('enonce');
var area4=document.getElementById('unique');
var area5=document.getElementById('multi');

function onStart() {
    nb1.style.backgroundColor = '#1A73E8';
    nb2.style.backgroundColor = '#1A73E8';
    nb3.style.backgroundColor = '#1A73E8';
    nb4.style.backgroundColor = '#1A73E8';

}
function colorizeNB1() { 
    nb1.style.backgroundColor = 'red';
    nb2.style.backgroundColor = '#1A73E8';
    nb3.style.backgroundColor = '#1A73E8';
    nb4.style.backgroundColor = '#1A73E8';
}
function colorizeNB3() { 
    nb3.style.backgroundColor = 'red';
    nb2.style.backgroundColor = '#1A73E8';
    nb1.style.backgroundColor = '#1A73E8';
    nb4.style.backgroundColor = '#1A73E8';
 }
function colorizeNB4() { 
    nb4.style.backgroundColor = 'red';
    nb2.style.backgroundColor = '#1A73E8';
    nb3.style.backgroundColor = '#1A73E8';
    nb1.style.backgroundColor = '#1A73E8';
}

area1.addEventListener.onclick = colorizeNB1();
area2.addEventListener.onclick = colorizeNB2();
area4.addEventListener.onclick = colorizeNB4();
area5.addEventListener.onclick = colorizeNB4();