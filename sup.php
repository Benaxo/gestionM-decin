<?php

$numed = $_GET["numed"];
$id = mysqli_connect("127.0.0.1","root", "", "hopital");
$req = "delete from medecins where numed='$numed'";
mysqli_query($id, $req);
echo "Suppression réussie...";
header("refresh:3;url=listeMedecins.php");
?>