<?php

Class login_authenticator {

public $recd_URL;



private function cookies_are_set(){
  if(isset($_COOKIE['user']) && isset($_COOKIE['pwsd'])){
   return true;
   } else {
   return false;
   }

}



public function islogged($rec_URL){
 $this->recd_URL = $rec_URL;
 if($this->cookies_are_set()){
return true;

 }
else {
return false;
 }
}



}
?>
