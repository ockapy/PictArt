<!DOCTYPE html>
<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=pict_art', 'root', 'root');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   
   }
?>*
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet">
</head>

<body>

    <div class="sidebar">
        <a href="Home2.php"><i class="fa fa-fw fa-home"></i> Home</a>
    </div>

    <!-- Header -->
    <div class="header">
        <h1>PICT BY PEYRIN GAEL</h1>
        <p>Tous droit reservé.</p>
    </div>
  
    <!-- Photo Grid -->
    <div class="row"> 
        <div class="column">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (1).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (2).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (3).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (51).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (53).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (54).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (55).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (56).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (57).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (58).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (59).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (60).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (61).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (65).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (82).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (83).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (79).jpg" style="width:100%">
        </div>
    
        <div class="column">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (4).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (5).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (6).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (7).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (8).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (9).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (10).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (11).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (12).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (32).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (33).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (35).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (36).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (37).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (38).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (62).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (66).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (75).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (84).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (8).jpg" style="width:100%">
			
        </div>  
    
        <div class="column">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (13).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (14).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (15).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (16).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (17).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (18).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (39).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (40).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (41).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (42).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (43).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (44).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (45).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (46).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (47).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (48).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (63).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (67).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (76).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (77).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (78).jpg" style="width:100%">
            
        </div>
    
        <div class="column">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (19).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (20).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (21).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (22).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (23).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (24).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (25).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (26).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (27).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (28).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (49).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (50).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (64).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (68).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (69).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (70).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (71).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (72).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (73).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (74).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (81).jpg" style="width:100%">
            <img src="../IMAGES/ALBUM GAEL/PICT'ART ALBUM FINAL/picture (80).jpg" style="width:100%">
        </div>
    </div>

</body>

</html>