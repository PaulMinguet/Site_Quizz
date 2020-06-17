var each_quest = document.querySelector('each_quest');
var dropper = each_quest.querySelectorAll(':scope dropper');
var btn = document.querySelectorAll('btn_quit');
var non = document.querySelectorAll('non');

dropper.forEach.addEventListener('dragover', function (e) {
	e.preventDefault(); // Annule l'interdiction de "drop"
}, false);

dropper.forEach.addEventListener('drop', function (e) {
	e.preventDefault();

	var files = e.dataTransfer.files,
		filesLen = files.length,
		filenames = "";

	for (var i = 0; i < filesLen; i++) {
		filenames += '\n' + files[i].name;
	}

	alert(files.length + ' fichier(s) :\n' + filenames);
}, false);

function btnQuit() {
    dropper.style.display = 'none';
    non.checked=true;
}
btn.addEventListener.onclick = btnQuit();

