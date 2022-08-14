<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=amicale;charset=utf8','root','root');
    
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
    <link rel="stylesheet" href="style/style_register.css">
    <title>formulaire</title>
</head>
<body>  
    <div class="formulaire"> 
     <h1> contactez-nous</h1>
         <div class="separation"></div>
     <form action="contact.php" method="post">
        
        
        <div  class="gauche">
            
                <label class="lab" for="matricule">votre matricule: <span>*</span></label><br>
                <input type="text"  name="matricule" placeholder="matricule"> <br> <br>
                                       
             
                <label class="lab" for="nom">votre nom: <span>*</span></label><br>
                <input type="text"  name="nom" placeholder="nom"><br> <br>
                                       
            
                <label class="lab" for="prenom">votre prenom:<span>*</span></label><br>
                <input type="text"  name="prenom" placeholder="prenom"><br> <br>
                                      
            
                <label class="lab" for="sexe">sexe:<span>*</span></label><br>
                <input type="text"  name="sexe" placeholder="sexe"><br> <br>
                                                    
            
                <label class="lab" for="age">age:<span>*</span></label><br>
                <input type="tel"  name="age" placeholder="age"><br> <br>
                 
         </div>
         
         
             
             <div class="droite">
                <label class="lab" for="fonction">fonction:<span>*</span></label><br>
                <input type="text"  name="fonction" placeholder="fonction"><br> <br>
                                      
             
                <label class="lab" for="adresse">adresse Email: <span>*</span></label><br>
                <input type="email" name="adresse" placeholder="adresse"  required ><br> <br>
                                           
            
                <label class="lab" for="login">login:<span>*</span></label><br>
                <input type="text"  name="login" placeholder="login"><br> <br>
                                     
            
                <label class="lab" for="password">mot de passe:<span>*</span></label><br>
                <input type="password"  name="password" placeholder="password"><br> <br>
                                    
            
                <label class="lab" for="confpass">confimer le mot de passe:<span>*</span></label><br>
                <input type="password"  name="confpass" placeholder="confpass"><br> <br>  
             
         </div>
         
         
         <div class="pied-formulaire" align="center" name="but">
            <button type="submit">Envoyer </button>
             
         </div>
     </form>
     </div>
     
     
    
     
</body>
</html>