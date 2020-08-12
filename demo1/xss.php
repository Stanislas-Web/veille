
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Faille xss</title>
    
</head>
<body>

        <style>
            
            body{
                    padding: 80px;
                }

        </style>

<form class="ui form" action="xss.php" method="post">
  <div class="field">
  <input type="text" name="text" placeholder="password">
    </div>
  <button class="ui button"  type="submit">Envoyer</button>
</form>

        <?php   
            // $_POST["text"] = strip_tags($_POST["text"]);   
                    // echo $_POST['text'] ;

                $_POST["text"] = strip_tags($_POST['text']);    

               echo $_POST["text"];     


   
        ?>
            
</body>
</html>