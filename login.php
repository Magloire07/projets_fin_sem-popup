<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=amicale;charset=utf8','root','');
    
}
catch(Exception $e){
    die('Erreur:'.$e->getMessage());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- permet de gérer le côté responsive-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="crossorigin="anonymous" referrerpolicy="no-referrer"/>                       <!--inportation de bibliotheque qui contient les icons-->
    <link rel="stylesheet" href="style/style_login.css">
    <title>formulaire</title>
</head>
<body>  
    <div class="formulaire"> 
     <h1> login</h1>
         <div class="separation"></div>
     <form action="contact.php" method="post">
        

                <label class="lab" for="login">login:<span>*</span></label><br>
                <input type="text"  name="login" placeholder="login"><br> <br>
                                     
            
                <label class="lab" for="password">mot de passe:<span>*</span></label><br>
                <input type="password"  name="password" placeholder="password"><br> <br>

         
         <div class="pied-formulaire" align="center" name="but">
            <button type="submit">Envoyer </button>
             
         </div>
     </form>
     </div>
     
     
    
     
</body>
</html>