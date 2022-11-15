<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body>




    

    <p class="titre1">
      PICTURE OF TEELEE
</P>


<p class="titre2">
      LOADING
</P>


        
    <div class="sidebar">
        <a href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="Picture.php"><i class="fa fa-camera" aria-hidden="true"></i> Picture</a>
        <a href="Pict'Line.php"><i class="fa fa-archive" aria-hidden="true"></i>Pict'Line</a>
        <a href="Inscription.php"><i class="fa fa-fw fa-user"></i> Profil</a>
        <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="Pict'Box.php"><i class="fa fa-camera" aria-hidden="true"></i> Pict'Box</a>
        <a href=""> <img class="insta" src="../IMAGES/Icons/insta.jpg"> </a>
        <a href="https://discord.gg/M3QjsKj" onclick="window.open(this.href); return false;"> <img class="discord" src="../IMAGES/Icons/discord.jpg"> </a>
    </div>

    <br /><br /><br />
  
  
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
                          <span class="letters letters-left">Welcome</span>
                          <span class="letters letters-bottom"><p id="demo" style="font-size:30px"></p> </span>
                          <span class="line line2"></span>
                        </span>
                 </h1>
 
               
        </div>
        
    </div>
      




    <script>

        anime.timeline({loop: false})
        
        .add({
    targets: '.titre2',
    opacity: [1,0],
    translateX: [0,0],
    easing:"easeOutExpo",
    delay: 3000
  })
        .add({
    targets: '.titre1',
    opacity: [0,1],
    translateX: ["-0.50em",0],
    easing:"easeOutExpo",
    delay: 200
  })
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

   // Set the date we're counting down to
   var countDownDate = new Date("Sep,28, 2020 12:00:00").getTime();
                           
                              // Update the count down every 1 second
                              var countdownfunction = setInterval(function() {
                            
                                  // Get todays date and time
                                  var now = new Date().getTime();
                              
                                  // Find the distance between now an the count down date
                                  var distance = countDownDate - now;
                              
                                  // Time calculations for days, hours, minutes and seconds
                                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                              
                                  // Output the result in an element with id="demo"
                                  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                                  + minutes + "m " + seconds + "s ";
                              
                                  // If the count down is over, write some text 
                                  if (distance < 0) {
                                      clearInterval(countdownfunction);
                                      document.getElementById("demo").innerHTML = "EXPIRED";
                                  }
                              }, 1000);
 </script>


</body>
</html>