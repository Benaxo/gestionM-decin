<?php
$numed = $_GET["numed"];
$id = mysqli_connect("127.0.0.1:3307","root", "", "hopital");//connexion au serveur mysql
    mysqli_query($id,"SET NAMES 'utf8'");
    $requete = "select * from medecins where numed = '$numed'";
    $reponse = mysqli_query($id, $requete);
    $ligne = mysqli_fetch_assoc($reponse);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modification du docteur <?=$ligne["nom"]?></h1>
    
    <form action="modif2.php" method="post">
    <input type="hidden" name="numed" value="<?=$numed?>">
    Nom : <input type="text" name="nom" maxlength="10" value="<?=$ligne["nom"]?>"><br><br>
    Prénom : <input type="text" name="prenom" value="<?=$ligne["prenom"]?>"><br><br>
    Choisir une specialité : <br>
    <select name="specialite">
        <?php
        //$id = mysqli_connect("127.0.0.1:3307","root", "", "hopital");//connexion au serveur mysql
        //mysqli_query($id,"SET NAMES 'utf8'");
        $requete = "select distinct specialite from medecins order by specialite";
        $reponse = mysqli_query($id, $requete);
        while($ligne2 = mysqli_fetch_assoc($reponse))
        {
            if($ligne["specialite"] == $ligne2["specialite"]){
                echo "<option selected>".$ligne2["specialite"]."</option>";
            }else echo "<option>".$ligne2["specialite"]."</option>";
        }
        ?>
    </select><br><br>
    Service : <input type="text" name="service" value="<?=$ligne["service"]?>">
    <br><br>
    <input type="submit" value="Modifier">

</form>





</body>
</html>