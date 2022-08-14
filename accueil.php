
<!-- index.php < ?php  session_start() ?> -->

<?php
session_start() ;
setcookie(
    'usermail',
    '',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);?>
<?php   

try{
$db = new PDO('mysql: host=localhost; dbname=amicale; charset=utf8','root','');
}
catch(Exception $e)
{
    
    die('!Erreur de connection:' . $e -> getMessage());
}
?>

<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Site amicale Page d'accueil</title>
      <link rel="stylesheet" href="style/style_accueil.css">
   
</head>
<body >
   
    <div class="container">
     
    <?php include_once('header.php'); ?>
        <h1 style=" color: white;font-weight : 900;">BIENVENUE sur le Site officiel de l'Amicale......</h1>
        <h1 style="margin-left: 350px;"> Merci de faire vos suggestions</h1>
        

        <!-- inclusion des variables et fonctions -->
        <?php
           // include_once('donnees.php');
            
            //include_once('login.php');
        ?>

       

   </div>
        
        
   

    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>
</html>