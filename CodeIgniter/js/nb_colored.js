var nb1 = document.getElementById('nb1');
var nb2 = document.getElementById('nb2');
var nb3 = document.getElementById('nb3');
var nb4 = document.getElementById('nb4');
var nb5 = document.getElementById('nb5');


var area1 = document.getElementById('nomqz');
var area2 = document.getElementById('nbr');
var area3 = document.getElementById('enonce');
var area4 = document.getElementById('oui');
var area5 = document.getElementById('non');
var area6 = document.getElementById('unique');
var area7 = document.getElementById('multi');
var dropper = document.getElementById('dropper');

function onStart() {
	// for (let i = 1; i < 5; i++) {
	//     nb[i].style.backgroundColor = '#1A73E8';

	// }
	nb1.style.backgroundColor = 'red';
	nb2.style.backgroundColor = '#1A73E8';
	nb3.style.backgroundColor = '#1A73E8';
	nb4.style.backgroundColor = '#1A73E8';
    nb5.style.backgroundColor = '#1A73E8';
    dropper.style.display = 'none';
}

function colorizeNB1() {

	nb1.style.backgroundColor = 'red';
	nb2.style.backgroundColor = '#1A73E8';
	nb3.style.backgroundColor = '#1A73E8';
	nb4.style.backgroundColor = '#1A73E8';
	nb5.style.backgroundColor = '#1A73E8';
}

function colorizeNB3() {

	nb3.style.backgroundColor = 'red';
	nb2.style.backgroundColor = '#1A73E8';
	nb1.style.backgroundColor = '#1A73E8';
	nb4.style.backgroundColor = '#1A73E8';
	nb5.style.backgroundColor = '#1A73E8';
}

function colorizeNB4() {

	nb4.style.backgroundColor = 'red';
	nb2.style.backgroundColor = '#1A73E8';
	nb3.style.backgroundColor = '#1A73E8';
	nb1.style.backgroundColor = '#1A73E8';
	nb5.style.backgroundColor = '#1A73E8';
}

function colorizeNB5() {

	nb5.style.backgroundColor = 'red';
	nb1.style.backgroundColor = '#1A73E8';
	nb2.style.backgroundColor = '#1A73E8';
	nb3.style.backgroundColor = '#1A73E8';
	nb4.style.backgroundColor = '#1A73E8';
}
function dragDrop() {
    dropper.style.display = 'block';
}

area1.addEventListener.onclick = colorizeNB1();
area2.addEventListener.onclick = colorizeNB2();
area4.addEventListener.onclick = colorizeNB4(), dragDrop();
area5.addEventListener.onclick = colorizeNB4();
area6.addEventListener.onclick = colorizeNB5();
area7.addEventListener.onclick = colorizeNB5();
