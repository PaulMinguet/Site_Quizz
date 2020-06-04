var dropper = document.getElementById('dropper');

dropper.addEventListener('dragover', function (e) {
	e.preventDefault(); // Annule l'interdiction de "drop"
}, false);

dropper.addEventListener('drop', function (e) {
	e.preventDefault();

	var files = e.dataTransfer.files,
		filesLen = files.length,
		filenames = "";

	for (var i = 0; i < filesLen; i++) {
		filenames += '\n' + files[i].name;
	}

	alert(files.length + ' fichier(s) :\n' + filenames);
}, false);