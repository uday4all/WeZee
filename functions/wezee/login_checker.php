<?php

Class login_authenticator {

<<<<<<< HEAD
public $recd_URL;



private function cookies_are_set(){
  if(isset($_COOKIE['user']) && isset($_COOKIE['pwsd'])){
   return true;
   } else {
   return false;
   }
=======
    public $recd_URL;

    private function cookies_are_set() {
        if (isset($_COOKIE['id']) && isset($_COOKIE['user'])) {
            return true;
        } else {
            return false;
        }
    }

    public function islogged($rec_URL) {
        $this->recd_URL = $rec_URL;
        if ($this->cookies_are_set()) {
            return true;
        } else {
            return false;
        }
    }
>>>>>>> 0a8f05ac822954eb6ea642b9b6e4d1277fa26382

}

?>
