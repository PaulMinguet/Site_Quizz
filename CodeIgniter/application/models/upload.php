<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file'];
    $fileTmpName = $_FILES['file'];
    $fileSize = $_FILES['file'];
    $fileError = $_FILES['file'];
    $fileType = $_FILES['file'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $accept = array('jpg', 'jpeg', 'png');


    if (in_array($fileActualExt, $accept)) {
        if ($fileError === 0) {
            if ($fileSize < 2000) { // 2 Mo
                $fileNameNew = uniqid('', true).".".$fileActualExt; // au cas nom de fichiers identique
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "<script>alert('Fichiers uploadés !')</script>";
            } else {
                echo "Fichier trop volumineux";
            }
        } else {
            echo "ERREUR";
        }
    } else {
        echo "Ce type de fichier n'est pas autorisé";
    }
}


?>