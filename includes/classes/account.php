<?php
    class account {
     private $con;   
     private $errorarray;


         public function __construct($con){
             $this->con=$con;
          $this->errorarray=array();
         }

         /////function dyal login


         public function login($us,$pw) {
                
            $pw=md5($pw);
            $log=mysqli_query($this->con, "SELECT * FROM users WHERE username='$us' AND password='$pw'");

            if(mysqli_num_rows($log) == 1){
            return true;
            }
            else{
            array_push($this->errorarray,constants::$logineror);
                return false;
            }

            }



         public function register($us,$fs,$ls,$em,$em2,$pw,$pw2){
          $this->taha9o9mnusername($us);
          $this->taha9o9mnfirstname($fs);
          $this->taha9o9mnlastname($ls);
          $this->taha9o9mnemail($em,$em2);
          $this->taha9o9mnpassword($pw,$pw2);


         //lmakanch 3adi hta error

         if(empty($this->errorarray)==true){
           //nsift lvariables l database
                   
            return  $this->n3amrVariableLdataBase($us,$fs,$ls,$em,$pw);
         }
         else{
             ///lamakanch true mghayw93 walo
             return false;
         }

         }

private function n3amrVariableLdataBase($us,$fs,$ls,$em,$pw){
           
            $tachfirLpassword=md5($pw);//tachfir l password
            $rand = rand(1, 6); ////kan3ti ra9m 3achwa2y mn 1 tal 6
            if($rand == 1)
                $profile_pic = "assets/images/profile_pics/head_carrot.png";
            else if($rand == 2)
                $profile_pic = "assets/images/profile_pics/head_emerald.png";
            else if($rand == 3)
                $profile_pic = "assets/images/profile_pics/head_pete_river.png";
            else if($rand == 4)
                $profile_pic = "assets/images/profile_pics/head_red.png";
            else if($rand == 5)
                $profile_pic = "assets/images/profile_pics/head_sun_flower.png";
            else if($rand == 6)
                $profile_pic = "assets/images/profile_pics/head_wisteria.png";
            $date=date("Y-m-d");
            
            $natija= mysqli_query($this->con,"INSERT INTO users VALUES ('','$us','$fs','$ls','$em','$tachfirLpassword','$date','$profile_pic')");


              return $natija;
}
                ///dala dyal erromsg


                public function khodlerror($error){
                    if(!in_array($error,$this->errorarray)){
                            $error="";
                    }
                    return "<span class'errormsg'>$error</span>";
                }


////kan3mr l error msg

       private function taha9o9mnusername($us){
                if(strlen($us)>25 ||strlen($us)<5){
                   array_push($this->errorarray,constants::$usernameerr);
                   return;
                }


                ///todo:lakan username deja kayn
                $ta2akod_Mn_username_Wach_Deja_Kayn=mysqli_query($this->con,"SELECT email FROM users WHERE username='$us'");
                if(mysqli_num_rows($ta2akod_Mn_username_Wach_Deja_Kayn)!=0){
                    array_push($this->errorarray,constants::$usernamealrdy);
               }


        }


        private  function taha9o9mnfirstname($fs){
            if(strlen($fs)>25 ||strlen($fs)<5){
                array_push($this->errorarray,constants::$firstnameerr);
                return;
                
             }
        }
        private  function taha9o9mnlastname($ls){
            if(strlen($ls)>25 ||strlen($ls)<5){
                array_push($this->errorarray,constants::$lastnameerr);
                return;
             }
        }
        private  function taha9o9mnemail($em,$em2){
                if($em!=$em2){
                    array_push($this->errorarray,constants::$emaildontmatch);
                    return;
                }
                if(!filter_var($em,FILTER_VALIDATE_EMAIL)){
                    array_push($this->errorarray,constants::$emailinva);
                    return;
                }

                //TODO: lakan email deja kayn

               $ta2akod_Mn_Email_Wach_Deja_Kayn=mysqli_query($this->con,"SELECT email FROM users WHERE email='$em'");
               if(mysqli_num_rows($ta2akod_Mn_Email_Wach_Deja_Kayn)!=0){
                    array_push($this->errorarray,constants::$emaimalrdy);
               }
        }
        private function taha9o9mnpassword($pw,$pw2){
                if($pw!=$pw2){
                    array_push($this->errorarray,constants::$pasworddontmatch);
                    return;
                }
                if(preg_match('/[^A-Za-z0-9]/',$pw)){
                 array_push($this->errorarray,constants::$passwordcont);
                 return;
                }
                if(strlen($pw)<5 || strlen($pw)>30){
                      array_push($this->errorarray,constants::$passwordbet);
                      return;
                }
        }

    }










?>