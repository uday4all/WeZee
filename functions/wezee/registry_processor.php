<?php

Class registry_processor {
private $username = get_admin_details("mysql");
private $user = get_admin_details("name");
private $password = get_admin_details("sql_password");
private $conn_db = new mysqli($servername, $user, $password);



private function check_conn(){
if($conn_db->connect_error){
die("Connection to database failed: ".$conn_db->connect_error);
return false;
} else {
return true;
}
}


function check_existing_email($received_mail_to_search){
private $sql = "SELECT email FROM get_admin_details($users_db) WHERE email==$received_mail_to_search";
private $result = $conn_db->query($sql);
if($result->num_rows>0){
return true;
} $conn_db->close();

}




function check_existing_mobile($received_mobile_to_search){
private $sql = "SELECT mobile FROM get_admin_details($users_db) WHERE mobile==$received_mobile_to_search";
private $result = $conn_db->query($sql);
if($result->num_rows>0){
return true;
} $conn_db->close();

}



function proceed_registration_now($registration_data){
private $sql = "INSERT INTO get_admin_details('users_db') (name,email,mobile,gender,dob,pwd,student) VALUES ($registration_data[0],$registration_data[1],$registration_data[2],$registration_data[3],$registration_data[4],$registration_data[5],$registration_data[6],$registration_data[7],$registration_data[8],$registration_data[9],$registration_data[10],$registration_data[11]";
if($conn_db->query($sql) === TRUE ) {
if($this->create_user_space($registration_data)){ return 0;
} else {return 1;
}

}
}


function create_user_space($filling_data) {
private $user_dir = "users/$filling_data[2]";
mkdir($user_dir);
copy("templates/user/profile.xml", $user_dir."/profile.xml");
copy("templates/user/timeline.xml", $user_dir."/timeline.xml");
copy("templates/user/messages.xml", $user_dir."/messages.xml");
copy("templates/user/friends.xml", $user_dir."/friends.xml");
copy("templates/user/blocks.xml", $user_dir."/blocks.xml");
//code under construction $this->user_file_data_update();
//set Cookies of wezee id and password code goes here
}




}
?>
