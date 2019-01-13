<?php
    class account {

     private $errorarray;


         public function __construct(){
          $this->errorarray=array();
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
                   
            return true;
         }
         else{
             ///lamakanch true mghayw93 walo
             return false;
         }

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
                if($pw<5 || $pw>30){
                      array_push($this->errorarray,constants::$passwordbet);
                      return;
                }
        }

    }



?>