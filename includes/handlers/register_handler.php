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