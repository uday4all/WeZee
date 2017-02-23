<?php include('login_checker.php'); ?>
<?php include('login_register_forms.php'); ?>
<?php 


function check_if_logged(){

$user_authentication_obj = new login_authenticator();
if($user_authentication_obj->islogged($_SERVER['PHP_SELF'])) {
//echo  'you are signed in';
return true;
}
else{
//echo  'you are not logged';
return false;
}
}




function insert_form($required_form){

$form_inserter = new main_forms();
if($required_form == "login") {

return $form_inserter->insert_login_form();
}


if($required_form == "registration") {

return $form_inserter->insert_registration_form();
}

}

?>
