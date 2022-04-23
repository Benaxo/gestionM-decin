<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    
</head>

<body>
    <h1>Liste des Médecins </h1>
    <hr>
    <table>
            <tr>
                <th colspan="6">base hopital.sql</th>
            </tr>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>SPECIALITES</th>
                <th>SERVICES</th>
                <th>MODIFIER</th>
                <th>SUPRIMER</th>

            </tr>
            <tr>

            </tr>

    <?php
        $id = mysqli_connect("127.0.0.1","root","","hopital");//connexion au serveur mysql
                            //  IP      , Login, MDP, Nom de la base
        mysqli_query($id,"SET NAMES 'utf8'");
        $requete = "select * from medecins order by NOM";
        $reponse = mysqli_query($id,$requete); //éxécute la requête

        while($ligne = mysqli_fetch_assoc($reponse))
        {
            echo "<tr><td>".$ligne["nom"]."</td><td>"
                            .$ligne["prenom"]."</td><td>"
                            .$ligne["specialite"]."<br>"."</td><td>"
                            .$ligne["service"]."<br>"."</td>
                            <td><a href='modif.php?numed=".$ligne["numed"]."'style='color: #1abc9c'><i class='fas fa-pen'></i></a></td>
                            <td><a href='sup.php?numed=".$ligne["numed"]."' style='color: #EA2027'><i class='far fa-trash-alt'></i></a></td>
                            </tr>";


        }
        
    ?>
    </table>
</body>
</html>