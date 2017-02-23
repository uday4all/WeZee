<?php
$error_id_array["191901"] = "The resource you are trying to access does not exist or you do not have authorised access for requested action";
$error_id["191902"] = "You cannot edit global details that are installed in core framework";


function get_error($error_id){

if (array_key_exists($error_id,$error_id_array)){
return $this->error_id_array[$error_id];
} else {
return "An error occured while processing an error ,error message is not available ,you may report this to administrator";

} 



}



?> 
