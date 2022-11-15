<!DOCTYPE html>
<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=pict_art', 'root', 'root');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   
   }
?>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../CSS/style1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body>

<p class="titre">
        Contactez nous ici
    </p>


<div class="sidebar">
        <a href="Home2.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="Picture2.php"><i class="fa fa-camera" aria-hidden="true"></i> Picture</a>
        <a href="Pict'Line2.php"><i class="fa fa-archive" aria-hidden="true"></i>Pict'Line</a>
        <a href="Profil.php"><i class="fa fa-fw fa-user"></i> <?php echo $user['pseudo'];?> </a>
        <a href="Contact2.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="Pict'Box.php"><i class="fa fa-camera" aria-hidden="true"></i> Pict'Box</a>
        <a href=""> <img class="insta" src="../IMAGES/Icons/insta.jpg"> </a>
        <a href="https://discord.gg/M3QjsKj"> <img class="discord" src="../IMAGES/Icons/discord.jpg"> </a>
    </div>

   
        <div style="padding:20px">
           <a href="Deconnexion.php"> <img class="logout" src="../IMAGES/Icons/log.jpg"> </a>
        </div>
    </div>

    <div class="formulaire">

    <form method="POST" action="mailto:maxime.rodrguez.st@gmail.com">
            <table align="center" color="white">
               <tr>
                  <td align="right" color="white">
                     <label>Pseudo :</label>
                     <input type="text" value="<?php echo $user['pseudo']; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right" color="white">
                     <label>Mail :</label>
                     <input type="text"  value="<?php echo $user['mail']; ?>" />
                  </td>
               </tr>
        
	
	
	<textarea name="message" rows="8" cols="45">
	Un problème? notez le ici.
	</textarea>
	
	

	
	<input type= "submit" value= "Envoyer">
	
	</form>

    </div>