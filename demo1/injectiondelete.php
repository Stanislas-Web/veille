
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
<form class="ui form" action="injectionsuite.php" method="post">
  <div class="field">
    <label>id</label>
    <input type="text" name="id" placeholder="password">
  </div>
  <button class="ui button"  type="submit">connexion</button>
</form>

        <?php
        if(isset($_POST['valider'])){
        // On récupère les variables envoyées par le formulaire
        $id = $_POST['id'];
      

        // Connexion à la BDD en PDO
        try { $bdd = new PDO('mysql:host=localhost;dbname=veille','root',''); }
        catch (Exeption $e) { die('Erreur : ' .$e->getMessage())  or die(print_r($bdd->errorInfo())); }

        // Requête SQL
        $req = $bdd->query("DELETE FROM users WHERE id = '$id' ");
        // $count = $req->rowCount();
        // if($count > 0){
    
        //     echo "vous avez un compte";

        // }else{
        //     echo "vous n'avez pas de compte";
        // }


        }

        ?>
            
</body>
</html>