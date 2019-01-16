<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome to slotify</title>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
</head>
<body>
    
         <div id="nowPlayBarConti">
                   

                     <div id="nowPlayBar">
                              

                            <div id="nowPlayBarLeft">
                                        
                            <div>
                                <span>
                                    <img src="https://i.ytimg.com/vi/rb8Y38eilRM/hqdefault.jpg?v=4ffb4222" alt="" class="albume"> 
                                </span>
                                <div class="trackinfo">

                                <span class="trackname">Hello birthday</span>
                                <span class="artistname">abdelali abouelhassan</span>

                                </div>



                            </div>

                            </div>
                            <div id="nowPlayBarCentr">
                                    
                                    <div class="contant PlayerControl">

                                                     <div class="button">

                                                     <button title="shuffle button" class="controlbutton shuffle">
                                                      <img src="assets/images/icons/shuffle.png" alt="shuffle">
                                                     </button>

                                                     <button title="previous button" class="controlbutton previous">
                                                      <img src="assets/images/icons/previous.png" alt="Previous">
                                                     </button>

                                                     <button title="Play button" class="controlbutton play">
                                                      <img src="assets/images/icons/play.png" alt="Play">
                                                     </button>

                                                     <button title="Pause button" class="controlbutton pause" style="display:none;">
                                                      <img src="assets/images/icons/pause.png" alt="Pause">
                                                     </button>

                                                     <button title="Next button" class="controlbutton next">
                                                      <img src="assets/images/icons/next.png" alt="Next">
                                                     </button>

                                                     <button title="Repeat button" class="controlbutton repeat">
                                                      <img src="assets/images/icons/repeat.png" alt="Repeat">
                                                     </button>
                                                     
                                                     </div>


                                                   <div class="playbackBar">
                                                                <span class="progressTime current">0.00</span>
                                                                 <div class="progressBar">
                                                                    <div class="progressBarBg">
                                                                             <div class="progress">

                                                                             </div>
                                                                    </div>    
                          
                                                                 </div>
                                                                 <span class="progressTime remainig">0.00</span>
                                                   </div>  

                                    </div>

                            </div>
                            <div id="nowPlayBarRight">
                                  <div class="volumeBar">
                                               <button class="controlbutton volume" title="Volue button">
                                                   <img src="assets/images/icons/volume.png" alt="Volume">
                                               </button>
                                                      <div class="progressBar">
                                                      <div class="progressBarBg">
                                                            <div class="progress">
                                                         </div>
                                                    </div>    
                                             </div>
                                  </div>
                            </div>


                     </div>
                      
              
         </div>



</body>
</html>