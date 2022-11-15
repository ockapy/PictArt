<!DOCTYPE html>
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
        Inscription
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

  
          





    
<?php

$bdd = new PDO('mysql:host=localhost;dbname=pict_art','root','root');

if(isset($_POST['forminscription']))
{
	
		
			$pseudo=htmlspecialchars($_POST['pseudo']);
			$mail=htmlspecialchars($_POST['mail']);
			$mail2=htmlspecialchars($_POST['mail2']);
			$mdp=sha1($_POST['mdp']);
			$mdp2=sha1($_POST['mdp2']);
			
			if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
			{
			
			$pseudolength = strlen($pseudo);
			if ($pseudolength <= 50)
			{
				if($mail == $mail2) 
				{
					if(filter_var($mail,FILTER_VALIDATE_EMAIL))
					{
						$reqmail = $bdd->prepare("SELECT * FROM * WHERE mail = ?");
						$reqmail->execute(array($mail));
						$mailexist = $reqmail->rowCount(p);
						if($mailexist == 0)
						{
							
						
								if ($mdp == $mdp2)
								{
									$insertmbr = $bdd->prepare("INSERT INTO utilisateur (pseudo, mail, mdp) VALUES (?,?,?)");
									$insertmbr ->execute(array($pseudo, $mail, $mdp ));
									$erreur = "Votre compte a bien été crée !";
								}		
								else
								{
									$erreur = "Vos mots de passe ne correspondent pas";
								}
						}
						else
						{
							$erreur = "Adresse mail déjà utilisée !";
						}
								
							}
							else
							{
								$erreur = "votre adresse mail n'est pas valide !";
							}
				}
				else
				{
					$erreur = "Vos adresses mail ne correspondent pas !";
				}
			}
			else
			{
				$erreur = "votre pseudo ne doit pas dépasser 50 caractères";
			}
		}
	else
		{
			$erreur = "tous les champs doivent être complétés !";
		}

}
?>

</div>


  

        	<h2>
         	<form method="POST" action="">
            	<table align="center" color="white">
               	<tr>
                	<td align="right" color="white">
                		<label for="pseudo">Pseudo :</label>
                    	<input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo"/>
                  	</td>
                </tr>
                <tr>
                  	<td align="right">
                     	<label for="mail">Mail :</label>
                     	<input type="email" placeholder="Votre mail" id="mail" name="mail"/>
                  	</td>
                </tr>
                <tr>
                  	<td align="right">
                     	<label for="mail2">Confirmation du mail :</label>
                     	<input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2"/>
                  	</td>
                </tr>
                <tr>
                  	<td align="right">
                     	<label for="mdp">Mot de passe :</label>                 
                     	<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  	</td>
                </tr>
                <tr>
                  	<td align="right">
                     	<label for="mdp2">Confirmation du mot de passe :</label>
                     	<input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  	</td>
                </tr>
                <tr>
                  	<td align="right">
                     	<input class="test2" type="submit" name="forminscription" value="Je m'inscris" />
                  	</td>
			    </tr>
			    <tr>
					<td align="right"><p>Vous avez un compte ? <a class="titreconnexion" href="connexion.php" >Se connecter !</a></td>
				</tr>
            </table>
		</form>			 
	
<?php
    if(isset($erreur)) {
        echo '<font color="red">, <center>'.$erreur."</font>";
    }
?>
</h2>
  

</body>

</html>