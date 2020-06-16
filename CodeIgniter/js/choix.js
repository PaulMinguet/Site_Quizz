var chx1 = document.getElementById("area_choix1");
var chx2 = document.getElementById("area_choix2");
var chx3 = document.getElementById("area_choix3");
var chx4 = document.getElementById("area_choix4");

function choixUnique() {
	console.log('clic Unique');
	chx1.style.display = 'block';
	chx2.style.display = 'none';
	chx3.style.display = 'none';
	chx4.style.display = 'none';
}

function choixMultiple() {
	console.log('clic Multiple');
	chx1.style.display = 'block';
	chx2.style.display = 'block';
	chx3.style.display = 'block';
	chx4.style.display = 'block';
}