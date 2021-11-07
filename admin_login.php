<?php

$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";

$con = mysqli_connect($host,$user, $password, $DB);
if(isset($_POST['username'])){

    if(!$con){
        echo "DATABASE CONNECTION FAILED";
        exit();
    }
    else{
        $username = $_POST['username'];
	    $Password = $_POST['Password'];
    	if(($username != '') && ($username != '')){
            $sql = "SELECT * from admin WHERE Admin_ID = '$username' AND Password = '$Password'";
		    if (($result = $con->query($sql)) !== FALSE){
                if ($row = $result->fetch_assoc()){
                    // echo "You have successfully Logged in";
                    header('location: Admin/Admin_Dashboard.php');
                    exit();
                }
                else {
                    header('location: admin_login.php');
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.php">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        background: 100%;
        list-style: none;
        text-decoration: none;
    }

    body {
        /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
        background: white;
    }


</style>
<body>
    <div class="LOGINmainContainer">

        <div class="TheContainer">
            <div class="LoginPageLoginImage">
                <img src="./IMG/img-01.webp" alt="logo">
            </div>
            <div class="LoginPhpCss">
                <form action="#" method="POST">
                    <h1>Admin Login</h1>
                    <input class="Login_admin" type="text" name="username" placeholder="Admin_ID" required>
                    <br>
                    <input class="LoginPassword" type="password" name="Password" placeholder="Password" required>
                    <br>
                    <input class="LoginSubmitBTN" type="submit" value="LOGIN">
                    <p><button class="LoginToMainFileButton"><a href="./index.php">HOME</a></button></p>
            </div>
</body>
</form>
</div>
</div>
<style>

.LOGINmainContainer{
    transition: box-shadow 1s;
}
.LOGINmainContainer:hover{
    box-shadow: 0 0px 50px rgb(0 0 0/40%);

}

.LoginToMainFileButton a{
color: white;
background-color: rgb(187, 187, 187);
padding: 15px 50px;
border-radius: 38px;
position: absolute;
top: -172px;
right: 659px;
font-weight: 900;
}
.LoginToMainFileButton a:hover{
    background-color: #57b846;
}
.Not_a_Member_So_Back_Login_To_Register  a{
    color: black;
    position: relative;
    bottom: 40px;
    left: 100px;
    font-weight: 500;
}

.LoginSubmitBTN {
    padding: 16px 125px;
    border-radius: 38px;
    background-color:  grey;
    border: transparent;
    margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
}
.LoginSubmitBTN:hover{
    background-color: #57b846;
}


.Not_a_Member_So_Back_Login_To_Register {
background-color: transparent;
border: transparent;
}
.Not_a_Member_So_Back_Login_To_Register a::hover{
    color: red;
}


</style>
</html>


 