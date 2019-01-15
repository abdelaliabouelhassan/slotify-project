<?php
include('includes/config.php');
include('includes/classes/account.php');
$account=new account($con);
include('includes/classes/constants.php');
include('includes/handlers/register_handler.php');
include('includes/handlers/login_handler.php');

///function kat tkhali liya dakchi lidakhl l user ib9a f blasto lakan 3ando chi ghalat
function htafdbvariable($vai){
         if(isset($_POST[$vai])){
                  echo $_POST[$vai];
         }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>welcome to slotify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/register.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>

</head>
<body>
     

         <?php
           
           if(isset($_POST['registerbutton'])){
                          

               echo '<script>
         
               $(document).ready(function(){
             
             $("#registerform").show();
             $("#loginform").hide();
             
             });
               
               </script>';
           }
           else {
               echo '<script>
         
               $(document).ready(function(){
             
             $("#registerform").hide();
             $("#loginform").show();
             
             });
               
               </script>';

           }
     
         ?>

        

     <div id="background">      
           
          <div id="logincont">
      
               <div class="inputContainer">

                      <!-- login form -->
        
        
                    <form action="register.php" id="loginform" method="POST">
                         <h2>Login your account</h2>
                         <?php
                              echo $account->khodlerror(constants::$logineror);
                         ?>
                    <label for="loginusername">username</label>
                         <input type="text" id="logingusername" name="logingusername" value="<?php htafdbvariable('logingusername'); ?>"  placeholder="e.g. bartSimpson" required><br><br>
                         <label for="password">password</label>
                         <input type="password" name="loginpassword" id="loginpassword"  required><br><br>
                         <button type="submite" name="loginbutton">Log In</button>
                               <div class="so2al">
                              <span id="khabilogin">Don't have an account yet? Signup here.</span>
                               </div>
                    </form>



                       <!--register form  -->

      
                    <form action="register.php" id="registerform" method="POST">
                         <h2>create your free account</h2>
                         <?php
                              echo $account->khodlerror(constants::$usernameerr);
                         ?>
                         <?php
                              echo $account->khodlerror(constants::$usernamealrdy);
                         ?>
                         <label for="username">username</label>
                         <input type="text" id="username" name="username" placeholder="e.g. bartSimpson" value="<?php htafdbvariable('username'); ?>" required><br><br>
                         <?php
                              echo $account->khodlerror(constants::$firstnameerr);
                         ?>
                         <label for="firsname">First name</label>
                         <input type="text" id="firsname" name="firsname" placeholder="e.g. Bart"  value="<?php htafdbvariable('firsname'); ?>" required><br><br>
                         <?php
                              echo $account->khodlerror(constants::$lastnameerr);
                         ?>
                         <label for="lastname">Last name</label>
                         <input type="text" id="lastname" name="lastname" placeholder="e.g. Simpson" value="<?php htafdbvariable('lastname'); ?>"  required><br><br>
                         <?php
                              echo $account->khodlerror(constants::$emaildontmatch);
                         ?>
                         <?php
                              echo $account->khodlerror(constants::$emailinva);
                         ?>
                         <?php
                              echo $account->khodlerror(constants::$emaimalrdy);
                         ?>
                         <label for="email">Email</label>
                         <input type="email" id="email" name="email" placeholder="e.g. bart@gmail.com" value="<?php htafdbvariable('email'); ?>"  required><br><br>
                         <label for="email2">Confirm Email</label>
                         <input type="email" id="email2" name="email2" placeholder="e.g. bart@gmail.com" value="<?php htafdbvariable('email2'); ?>" required><br><br>
                         <?php
                              echo $account->khodlerror(constants::$pasworddontmatch);
                         ?>
                         <?php
                              echo $account->khodlerror(constants::$passwordcont);
                         ?>
                         <?php
                              echo $account->khodlerror(constants::$passwordbet);
                         ?>
                         <label for="password">password</label>
                         <input type="password" name="password" id="password"  required><br><br>
                         <label for="password2">Confirm password</label>
                         <input type="password" name="password2" id="password2"  required><br><br>
                         <button type="submite" name="registerbutton">SIGN UP</button>
                     
                         <div class="so2al">
                                <span id="khabiregister">Already have an account? Log in here.</span>
                               </div>


                    </form>


               </div>




 <div class="logintext">
            <h1>Get great music, right now</h1>
            <h2>Listen to loads of songs for free</h2>
            <ul>
                  <li>Discover music you'll fall in love with</li>
                  <li>Creat your own playlists</li>
                  <li>Follow artists to keep up to date</li>    
            </ul>
 </div>






      </div> 

 </div> 

</body>
</html>