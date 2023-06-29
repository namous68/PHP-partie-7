<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Formulaire USER</h1>
    
    <?php
    if(isset($_POST['civilite']) && ($_POST['civilite']) !=="" 
        && isset($_POST['nom']) && ($_POST['nom']) !=="" 
        && isset($_POST['prenom']) && ($_POST['prenom']) !== "" 
        && isset($_FILES['fichier']) && ($_FILES['fichier']['name'])!==""
        && $_FILES['fichier']['type'] == "application/pdf" ){

        echo 'Civilité: ' . $_POST['civilite']. '<br/>';
        echo 'Nom: '. $_POST['nom']. '<br/>';
        echo 'Prénom: '. $_POST["prenom"]. '<br/>';

        // Informations de fichier
        echo 'Nom du fichier: ' . $_FILES['fichier']['name'] . '<br>';
        echo 'Type du fichier: ' . $_FILES['fichier']['type'] . '<br>';
        echo 'Chemin  du fichier: ' . $_FILES['fichier']['tmp_name'] . '<br>';
        
    } else {
    ?>
        <form method="post" action="./index.php" enctype="multipart/form-data">
            <label for="civilite">Civilité :</label>
            <select id="civilite" name="civilite" required>
                <option value="-">-</option>
                <option value="Mr">Monsieur</option>
                <option value="Mme">Madame</option>
            </select><br><br>
            
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"><br><br>
            
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom"><br><br>
            
            <input type="file" name="fichier">
            <br><br>
            
            <input type="submit" value="SEND">
        </form>
    <?php 
    }
    ?>
</body>
</html>
