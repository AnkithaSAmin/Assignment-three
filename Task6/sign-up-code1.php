<?php
session_start();
$conn = mysqli_connect("localhost", "ankitha", "ankitha28", "ankitha_reg");
    
// Check connection
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}
else{
    echo " ";
}

if(isset($_POST['signup_btn'])) 
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['confirm_password'];
    $country = $_POST['country'];

    $emailquery = "SELECT * FROM signup WHERE email='$email' ";
    $check_email = mysqli_query($conn, $emailquery);

    if(mysqli_num_rows($check_email) > 0)
    {
        $_SESSION['status'] = "Email Already Exists.! Please Try another one.";
        header("Location: sign-up1.php");
    }
    else
    {
        
        if($password == $c_password)
        {
            $reg_query = "INSERT INTO signup (username,email,password,country) VALUES ('$username','$email','$password','$country')";
            $reg_query_run = mysqli_query($conn, $reg_query);

            if($reg_query_run)
            {
                $_SESSION['status'] =  "Successfully registered";
                header("Location: sign-up1.php");
            }
            else 
            {
                $_SESSION['status'] =  "Something went wrong.!";
                header("Location: sign-up1.php");
            }
        }
        else
        {
            $_SESSION['status'] =  "Password and Confirm Password Does Not Match";
            header("Location: sign-up1.php");
        }
    }
}
?>