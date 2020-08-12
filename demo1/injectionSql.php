
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>injection sql</title>
    
</head>
<body>

        <style>
            body{
                    padding: 80px;
                }
        </style>

<form class="ui form" action="injectionSql.php" method="post">
  <div class="field">
    <label>login</label>
    <input type="text" name="login" placeholder="login">
  </div>
  <div class="field">
    <label>password</label>
    <input type="password" name="password" placeholder="password">
  </div>
  <button class="ui button" name="connexion" type="submit">connexion</button>
</form>

         <?php 
        if(isset($_POST['connexion'])){
        // On récupère les variables envoyées par le formulaire
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Connexion à la BDD en PDO
        try { $bdd = new PDO('mysql:host=localhost;dbname=veille','root',''); }
        catch (Exeption $e) { die('Erreur : ' .$e->getMessage())  or die(print_r($bdd->errorInfo())); }

        // Requête SQL
        $req = $bdd->query("SELECT * FROM users WHERE login='$login'  AND password='$password'");
        $data = $req->fetch();
        $count = $req->rowCount();

        if($count > 0){
    
            echo "vous etes en tant que ".$data["login"];

        }else{
            echo "vous n'avez pas de compte";
        }

    }




        ?>

<?php
// if(isset($_POST['connexion'])){
// // On récupère les variables envoyées par le formulaire
// $login = $_POST['login'];
// $password = $_POST['password'];

// // Connexion à la BDD en PDO
// try { $bdd = new PDO('mysql:host=localhost;dbname=veille','root',''); }
// catch (Exeption $e) { die('Erreur : ' .$e->getMessage())  or die(print_r($bdd->errorInfo())); }

// // Requête SQL sécurisée
// $req = $bdd->prepare("SELECT * FROM users WHERE login= ? AND password= ?");
// $req->execute(array($login, $password));
//         $data = $req->fetch();
//         $count = $req->rowCount();

//         if($count > 0){
    
//             echo "vous etes en tant que ".$data["login"];

//         }else{
//             echo "vous n'avez pas de compte";
//         }
//     }

?>
            
</body>
</html>