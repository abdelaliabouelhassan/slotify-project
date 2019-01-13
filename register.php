<?php

function pass($text1){
    $text1=strip_tags($text1);
    $text1=str_replace(" ","",$text1);
    return $text1;
}

function _3adya($text1){
    $text1=strip_tags($text1);
    $text1= str_replace(" ","",$text1);
    return $text1;
}
function _machi3adiya($text1){
    $text1=strip_tags($text1);
    $text1= str_replace(" ","",$text1);
    $text1=ucfirst(strtolower($text1));
    return $text1;
}



if(isset($_POST['loginbutton'])){
      ///login form
}

if(isset($_POST['registerbutton'])){
 // register form
 

$username=_3adya($_POST['username']); 
$firstname=_machi3adiya($_POST['firsname']); 
 $lastname=_machi3adiya($_POST['lastname']); 
 $email=_machi3adiya($_POST['email']); 
 $email2=_machi3adiya($_POST['email2']); 
 $password=pass($_POST['password']); 
 $password2=pass($_POST['password2']); 
 

}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>welcome to slotify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

      <div class="inputContainer">
        
      <form action="register.php" id="loginform" method="POST">
             <h2>Login your account</h2>
      <label for="loginusername">username</label>
            <input type="text" id="logingusername" name="logingusername" placeholder="e.g. bartSimpson" required><br><br>
            <label for="password">password</label>
            <input type="password" name="loginpassword" id="loginpassword"  required><br><br>
            <button type="submite" name="loginbutton">Log In</button>

      </form>





      
      <form action="register.php" id="registerform" method="POST">
             <h2>create your free account</h2>
            <label for="username">username</label>
            <input type="text" id="username" name="username" placeholder="e.g. bartSimpson" required><br><br>
            <label for="firsname">First name</label>
            <input type="text" id="firsname" name="firsname" placeholder="e.g. Bart" required><br><br>
            <label for="lastname">Last name</label>
            <input type="text" id="lastname" name="lastname" placeholder="e.g. Simpson" required><br><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="e.g. bart@gmail.com" required><br><br>
            <label for="email2">Confirm Email</label>
            <input type="email" id="email2" name="email2" placeholder="e.g. bart@gmail.com" required><br><br>
            <label for="password">password</label>
            <input type="password" name="password" id="password"  required><br><br>
            <label for="password2">Confirm password</label>
            <input type="password" name="password2" id="password2"  required><br><br>
            <button type="submite" name="registerbutton">SIGN UP</button>

      </form>


        </div>




</body>
</html>