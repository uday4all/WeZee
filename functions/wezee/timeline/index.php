<?php
include 'timelineposterclass.php';
$posting_object = new timeposter();
$nameErr = $emailErr = $mobileErr= '';
$name = $email= $mobile= $website='';
$save = "NO";
if($_SERVER["REQUEST_METHOD"] == "POST"){
		function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data =  htmlspecialchars($data);
		return $data;
	}
	
	//name
	if(empty($_POST['name'])){
	$nameErr = "Name is required";
	}
	if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
  $nameErr = "Only letters and white space allowed"; 
}
	$name=test_input($_POST['name']);
	
	
	//email
	if(empty($_POST['email'])){
	$emailErr = "email is required";
	}
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format"; 
   }
	$email=test_input($_POST['email']);
	
	
	
	
	
	//mobile
	$phoneNumber = $_POST['mobile'];
    if(!empty($phoneNumber)) {
    if(preg_match('/^\d{10}$/',$phoneNumber)) {
      //$mobile=test_input($phoneNumber);
      // your other code here
    }
    else {
      $mobileErr= "Invalid Mobile number";
    }
} else {
  $mobileErr = 'You must provide a phone number !';
}
$mobile=test_input($phoneNumber);
$website=$_POST['website'];
	
	
	if($nameErr == "" && $emailErr == "" && $mobileErr == ""){
	$save = "OK";
	
}
}

if($save == "OK"){
	//include 'timelinesaver.php';
	$posting_object->create_post("sai".md5(date("dmYhisA") ),"self");
}


?>


<!DOCTYPE html>
<html>
<head>
<title>Hello Form</title>
</head>
<body>
<h1>This is a heading</h1>
<p>This is a paragraph</p>
<form action="index.php" method="post">
<label for="name">Name :</label><input type="text" label="name: "name="name" value="<?php echo $name; ?>">*<?php echo $nameErr; ?><br>
<label for="email">Email :</label><input type="text" label="email :" name="email" value="<?php echo $email; ?>">*<?php echo $emailErr; ?><br>
<label for="mobile">Mobile :</label><input type="text" label="mobile: " name="mobile" value="<?php echo $mobile; ?>">*<?php echo $mobileErr; ?><br>
<label for="mobile">Website :</label><input type="text" label="mobile: " name="website" value="<?php echo $website; ?>"><br>
<input type="submit" value="SUBMIT">
<br><br>
<?php //include 'filereader.php'; ?>
</form>
</body>
</html>