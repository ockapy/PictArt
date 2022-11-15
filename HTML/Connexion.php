<?php


session_start();

$bdd = new PDO('mysql:host=localhost;dbname=pict_art','root','root');


if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
		header("Location: Home2.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style6.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>


<body>




    <p class="titre">
        CONNEXION
    </p>

    
    <div class="sidebar">
        <a href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="Picture.php"><i class="fa fa-camera" aria-hidden="true"></i> Picture</a>
        <a href="Pict'Line.php"><i class="fa fa-archive" aria-hidden="true"></i>Pict'Line</a>
        <a href="Profil.php"><i class="fa fa-fw fa-user"></i> Profil</a>
        <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="Pict'Box.php"><i class="fa fa-camera" aria-hidden="true"></i> Pict'Box</a>

        <a href=""> <img class="insta" src="../IMAGES/Icons/insta.jpg"> </a>
        <a href="https://discord.gg/M3QjsKj"> <img class="discord" src="../IMAGES/Icons/discord.jpg"> </a>
    </div>



	  
		<div class="connexion">
      
         <form method="POST" action="">
         <table align="center" color="white">
         <tr>
            <td align="right" color="white">
			      <label>Email :</label>
			      <input type="email" name="mailconnect" placeholder="Mail" />
            </td>
         </tr>
         <tr>
            <td align="right" color="white">
			      <label>Mot de passe :</label>
               <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            </td>
         </tr>
         <tr>
            <td align="right" color="white">
               <input class="test2" type="submit" name="formconnexion" value="Se connecter !" />
            </td>
         </tr>
         <tr>
            <td align="right" color="white">
               <br /><p>Pas de compte ? <a class="titreconnexion" href="Inscription.php">S'inscrire!</a></p>
            </td>
         </tr>
         </table>

		   </form>
		
<?php
	if(isset($erreur)) {
    	echo '<font color="red">, <center>' .$erreur."</font>";
}
?>
	  

</html>