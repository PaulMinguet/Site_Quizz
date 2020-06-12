function aff_cach_input(action){ //la fonction JS
if (action == "professeur") //on regarde si tu veux afficher ou cacher le input
{
    document.getElementById('matiere').style.display="block"; //Si oui, on l'affiche
    document.getElementById('mat').style.display="block";
    document.getElementById('group').style.display="none";
    document.getElementById('grp').style.display="none";
}
else if (action == "eleve")
{
    document.getElementById('matiere').style.display="none"; //Si non, on le cache
    document.getElementById('mat').style.display="none";
    document.getElementById('group').style.display="block";
    document.getElementById('grp').style.display="block";
}
else
{
    document.getElementById('matiere').style.display="none";
    document.getElementById('mat').style.display="none";
    document.getElementById('group').style.display="none";
    document.getElementById('grp').style.display="none";
}
return true;
}