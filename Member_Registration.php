<?php
//some basic connection varible for path
$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";

// now make path to mysql with that shit
$con = mysqli_connect($host,$user, $password, $DB);
    if(!$con){
        //what if you nerd failed?
        echo "DATABASE CONNECTION FAILED";
        exit();
    }
    //By any chance i got Lucky
    else{
        //check whether it correct or not by using html
        if((isset($_POST['Member_Name'])) && (isset($_POST['Registration_Age'])) && (isset($_POST['Registration_Select_Gender'])) && (isset($_POST['Registration_Address'])) && (isset($_POST['Member_Phone_Number'])) && (isset($_POST['Registration_Password']))){
            //create PHP varibles and make sure u connect them with html name. 
            $Member_Name = $_POST['Member_Name'];
            $Age = $_POST['Registration_Age'];
            $Gender = $_POST['Registration_Select_Gender'];
            //check point
            // echo $Gender;
            $Address = $_POST['Registration_Address'];
            $Member_Phone_Number = $_POST['Member_Phone_Number'];
            $Password = $_POST['Registration_Password'];
            // echo 'check - 1';
            

            //Here we are, Let's make path and write sql command or query and link them with $variables
            $sql = "INSERT INTO `members` (`Member_Name`, `Age`, `Gender`, `Address`, `Trainer_Code`, `Member_Phone_Number`, `Password`) VALUES ('". $Member_Name ."','". $Age ."','". $Gender ."','". $Address ."', '','". $Member_Phone_Number ."','". $Password ."');";

            // $sql = "INSERT INTO `Mehraz`(`Name`, `Age`, `Section`) VALUES ('[value]','[25]','[4]')";
            // echo 'check - 2';

            //now make sure u did it cool and clear.
            if ($con->query($sql) === TRUE) {
                echo "insert";
            } else {
                echo "not ok";
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
    <title>Member Registration</title>
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
    .LoginPageLoginImage {
    /* background-color: green; */
    position: relative;
    right: 50px;
    top: 173px;
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
                    <h1>Member Registration</h1>
                    <input class="Registration_Member_Name" type="text" name="Member_Name" placeholder="Member_Name" required>
                    <br>
                    <input class="Registration_Age" type="text" name="Registration_Age" placeholder="Age" required>
                    <br>
                    <div class="Registration_Select_Gender" >
                    <input type="radio" name="Registration_Select_Gender" value="male" not_checked required> Male
                    <input type="radio" name="Registration_Select_Gender" value="female" > Female
                    <input type="radio" name="Registration_Select_Gender" value="others"> others
                </div>
                    <br>
                    <input class="Registration_Address" type="text" name="Registration_Address" placeholder="Address" required>
                    <br>

                    <input class="Member_Phone_Number" type="text" name="Member_Phone_Number" placeholder="Phone_Number" required>
                    <br>

                    <input class="Registration_Password" type="password" name="Registration_Password" placeholder="Password" required>
                    <br>
                    <input class="LoginSubmitBTN" type="submit" value="CONFIRM">
                    <p><button class="Already_Member_So_Back_Register_To_Login"><a href="./Member_Login.php">Alreay a Member >>></a></button></p>
                    <p><button class="LoginToMainFileButton"><a href="./index.php">HOME</a></button></p>
            </div>
        </form>
    </div>
</div>
</body>
<style>
.LOGINmainContainer{
    transition: box-shadow 3s;
}
.LOGINmainContainer:hover{
    box-shadow: 0 0px 50px rgb(0 0 0/40%);

}

.Registration_Age {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Registration_Member_Name {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Registration_Address {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Member_Phone_Number {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Registration_Password {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Registration_Select_Gender{
    font-size: 14px;
    font-weight: 900;
    margin-top: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    padding: 16px 54px; 
    border-radius: 38px;
    background-color: #e6e6e6;
    color: grey;
}
.Already_Member_So_Back_Register_To_Login a{
    color: black;
    /* background-color: rgb(187, 187, 187); */
    /* padding: 15px 50px; */
    /* border-radius: 38px; */
    position: relative;
    bottom: 20px;
    left: 80px;
    font-weight: 500;
}

.Already_Member_So_Back_Register_To_Login {
background-color: transparent;
border: transparent;
}
.Already_Member_So_Back_Register_To_Login a:hover{
    color: #57b846;
}

.LoginSubmitBTN {
    padding: 16px 113px;
    border-radius: 38px;
background-color: grey;
border: transparent;
margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
}
.LoginSubmitBTN:hover{
    background-color: #57b846;
}

.LoginToMainFileButton a{
color: white;
background-color: rgb(187, 187, 187);
padding: 15px 50px;
border-radius: 38px;
position: absolute;
top: -4px;
right: 664px;
font-weight: 900;
}

.LoginToMainFileButton a:hover{
    background: #57b846;
}
</style>
</html>