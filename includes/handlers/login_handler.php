<?php
if(isset($_POST['loginbutton'])){
    ///login form
    $username=$_POST['logingusername'];
    $password=$_POST['loginpassword'];
   
    $result = $account->login($username, $password);

	if($result == true) {
        $_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}

}

?>