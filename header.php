<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site amical</title>
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Raleway&display=swap');
        body{
            margin: 0px;
           }
        
        ul a{
            text-decoration: none;/*pour désouligné*/
            color: black;
            font-weight: bolder;
          
            }
        nav ul{
            margin: 0px;
            display: flex;
            align-items: center;
            list-style-type: none; /* enleve de point devant les listes*/

          }
        ul a li{
            
            margin-left: 30px;
            cursor: pointer;
            }
        
        .a1 {
            background-color: white ;
            border-radius: 5px;
            font-size: 20px;
            font-family: 'Playfair';
            padding-left: 5px;
            padding-right: 5px;
                       
        }
        .a2,.a3,.a4,.a5,.a6{
            
            border-bottom: 1px solid aqua; 
            font-size: 15px;
            font-family: 'Playfair'
            
        }
         
        nav{
            display: flex;
            background-color: #b7b3b3;
            height: 50px;  
            align-items: center;
           
        }
         .dec {
            margin-left: 150px;
            color: red;
            background-color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
           // include_once('donnees.php');
          
           // include_once('fonctions.php');
        ?>

   
   <header>
   <nav >
        <ul>
            <a href="accueil.php"><li class="a1">ACCUEIL</li></a>
            <a href="presentation.php" ><li class="a2"> PRESENTATION</li></a>
            <a href="admin.php" ><li class="a3">ADMINISTRATION</li></a>
            <a href="annonces.php" ><li class="a4">ANNONCES</li></a>
            <a href="projet.php" ><li class="a5">PROJETS</li></a>
            <a href="contact.php" ><li class="a6">CONTACTS</li></a>
            <a href="listeaproduire.php"><li class="a6">LISTE A PRODUIRE</li></a>
            <a href="deconnexion.php" ><li class="dec">Déconnecté</li></a>
        </ul>
    </nav>
</header>
    
</body>
</html>
   
