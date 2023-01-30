<?php
error_reporting(1);
$db = "localhost";
$uName = "root";
$ped = "";
$dbName = "securedform";
$errors = array();


$conn = mysqli_connect($db, $uName, $ped, $dbName);   



if(isset($_POST["submit"])){
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $pwd   = mysqli_real_escape_string($conn, $_POST["password"]);
    $pwd1  = mysqli_real_escape_string($conn, $_POST["password1"]);
    $chk   = mysqli_real_escape_string($conn, $_POST["check"]);


    if(empty($fname)){
        array_push ($errors, "first name is required");
    }

    if(empty($lname)){
        array_push($errors, "Last name is required");
    }

    if(empty($email)){
        array_push($errors, "Email is required");
    }

    if(empty($pwd)){
        array_push($errors, " Password is required");
    }
    if(empty($chk)){
        array_push($errors, "Agree to Terms & Condition to sign up");
    }

    if($pwd1 != $pwd){
        array_push($errors, "password do not match");
    }


    if($submit == 'submit' || strlen($email)>0){
        $query = "SELECT * FROM signup WHERE email = '$email' ";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)>0){
            array_push($errors, "<strong> $email </strong> has taken");
        }


        if(count($errors)==0){

            // $password1 =password_hash($pwd, PASSWORD_DEFAULT);
            $password = md5($pwd);

            $sql = " INSERT INTO signup (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$pwd') ";
            $rsl = mysqli_query($conn, $sql);
            header("location:login.php");
        }

    }
}


if(isset($_POST['login'])){

    $mail = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($mail)){
        array_push($errors, "Email is required");
    }

    if(empty($pass)){
        array_push($errors, "Password is required");
    }

    if(count($errors)==0){

        $password = md5($pwd);

        $log = " SELECT * FROM signup WHERE email = '$mail' AND password = '$pass' ";

        $datab = mysqli_query($conn, $log);


        if($row = mysqli_fetch_array($datab)){
            header("location: success.php");
            exit(0);
        }else{
            array_push($errors, "Wrong Email / Password Combination");
        }

    }



}




?>