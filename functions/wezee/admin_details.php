<?php
 class administrative_details {
 
 //Array with administrative_details
 
$administrative_details = array(
"HOST"=>"www.wezee.tk", 
"name"=>"WeZee", 
"mysql"=>"mysql.wezee.tk", 
"sql_port"=>"3301",
"sql_password"=>"*******",
"users_db"=>"users_db", 
"custom_1"=>"No info available", 
"custom_2"=>"No info available",
"custom_3"=>"No info available", 
"error"=>"get_error('191901')",
"error_2"=>'get_error("191902")', );

 

function get_admin_details($requested_details){
if($requested_details ==  "HOST" | "name" | "mysql" | "sql_password" | "sql_port" | "users_db" | "custom_1" | "custom_2" | "custom_3"){
 return $this->administrative_details[$requested_details]; 
   }
   else {
     return $this->administrative_details["error"];
     }
     }
     
function set_admin_details($id,$value){

if($id == "HOST" | "name" | "mysql" | "sql_password" | "sql_port" | "users_db" ){

return $this->administrative_details("error_2");
} else if ($id == "custom_1") {

  $this->administrative_details["custom_1"]=$value;

} else if ($id == "custom_2") {

  $this->administrative_details["custom_2"]=$value;

} else if ($id == "custom_3") {

  $this->administrative_details["custom_3"]=$value;

} else {

return $this->administrative_details("error");
} 





}
     
     
     
     
     
     }
     ?>
