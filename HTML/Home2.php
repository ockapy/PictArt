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
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body>




    <p class="titre">
        PICT'ART
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
	
	
	
	<div>
	
          





     
    <script>
        function on() {
            document.getElementById("overlay").style.display = "block";
        }
          
        function off() {
            document.getElementById("overlay").style.display = "none";
        }
    </script>



<div class="bgimg">
        
        <div class="middle">
                <h1 class="ml5">
                        <span class="text-wrapper">
                          <span class="line line1"></span>
                          <span class="letters letters-left"> Bienvenue </span> 
                          <span class="letters letters-bottom"><p style="font-size:35px"> <?php echo $user['pseudo'];?> </p> </span>
                          <span class="line line2"></span>
                        </span>
                 </h1>
 
               
        </div>
        
    </div>

    <script>

        anime.timeline({loop: false})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 1000
  }).add({
    targets: '.ml5 .line',
    duration: 1000,
    easing: "easeOutExpo",
    translateY: (el, i) => (-1 + 2*1*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 1000,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 1000,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-bottom',
    opacity: [0,1],
    translateX: ["-0.15em", 0],
    easing: "easeOutExpo",
    duration: 1000,
    offset: '-=100'
  }).add({
    targets: '.ml5',
    opacity: [0,1],
    duration: -1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  
 </script>
