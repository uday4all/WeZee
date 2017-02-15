<?php include('login_checker.php'); ?>
<?php 


function check_if_logged(){

$user_authentication_obj = new login_authenticator();
if($user_authentication_obj->islogged($_SERVER['PHP_SELF'])) {
echo  'you are signed in';
}
else{
echo  'you are not logged';

}
}


?>
