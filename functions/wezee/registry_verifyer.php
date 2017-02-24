<?php

$nameErr = $emailErr = $mobileErr = $genderErr = $dobErr = $pwdErr = $studentErr = "";
$name = $emaill = $mobile = $gender = $dob = $pwd = $student = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["pwd"] != $_POST["pwd1"]) {
        $pwdErr = "Mismatch password";
    } else {

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        if (!preg_match("/^[a-zA-Z] *s/", $name)) {
            $nameErr = "Only letters are allowed";
        }


        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid E-mail format";
        }


        if (empty($_POST["mobile"])) {
            $mobileErr = "Mobile is required";
        } else {
            $mobile = test_input($_POST["mobile"]);
        }
        if (!preg_match('/(0[0-9]{9})/', $mobile)) {
            $mobileErr = "Invalid Mobile Number";
        }


        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
        } else {
            $password = test_input($_POST["password"]);
        }


        if (empty($_POST["gender"])) {
            $genderErr = "gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }




        if (empty($_POST["dob"])) {
            $dobErr = "Date of Birth is required";
        } else {
            $dob = test_input($_POST["dob"]);
        }





        if($nameErr == $emailErr == $mobileErr == $genderErr == $dobErr == $pwdErr == $studentErr == "") {

            $registration_array_data = array($name, $emaill, $mobile, $gender, $dob, $pwd, $student);
            proceed_registration_now($registration_array_data);
        }
    }
}
