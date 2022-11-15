<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=pict_art', 'root', 'root');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: Profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: Profil.php?id='.$_SESSION['id']);
   
   
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membres SET motedepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: Profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style5.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>


<body>




    <p class="titre">
        BONJOUR
        <?php echo $user['pseudo']; ?>
        !
    </p>

    
    <div class="sidebar">
        <a href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="Picture.php"><i class="fa fa-camera" aria-hidden="true"></i> Picture</a>
        <a href="Pict'Line.php"><i class="fa fa-archive" aria-hidden="true"></i>Pict'Line</a>
        <a href="Profil.php"><i class="fa fa-fw fa-user"></i> Profil</a>
        <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="Pict'Box.php"><i class="fa fa-camera" aria-hidden="true"></i> Pict'Box</a>

        <img class="insta" src="../IMAGES/Icons/insta.jpg">
        <img class="discord" src="../IMAGES/Icons/discord.jpg">
    </div>


      <div class="connexion">
         
         <div>
            <form method="POST" action="" enctype="multipart/form-data">
            <table align="center" color="white">
               <tr>
                  <td align="right" color="white">
                     <label>Pseudo :</label>
                     <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right" color="white">
                     <label>Mail :</label>
                     <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right" color="white">
                     <label>Mot de passe :</label>
                     <input type="password" name="newmdp1" placeholder="Mot de passe"/>
                  </td>
               </tr>     
               <tr>
                  <td align="right" color="white">
                     <label>Confirmation - mot de passe :</label>
                     <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" />
                  </td>
               </tr>
               <tr>
                  <td align="right" color="white">
                     <input class="test2" type="submit" value="Mettre à jour mon profil !" />
                  </td>
               </tr>
               
               
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>

      
      
<?php   
}
else {
   header("Location: Connexion.php");
}
?>