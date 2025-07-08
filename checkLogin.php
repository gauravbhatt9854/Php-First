<?php
// $name= $_GET['name'];
// $pass= $_GET['password'];


$name2= $_POST['name'];
$pass2= $_POST['password'];

// echo $name2."</br>";
// echo $pass2."</br>";

if(strcmp(strtolower($name2) , "gaurav")==0 && strcmp($pass2 , "1234")==0)
{
    echo "you are valid user";
    echo "< font color=red >you are valid user </font>";
    setcookie("name" , $name2 );
    setcookie("password" , $pass2);
    session_start();
    $_SESSION["username"]=$name2;
    header("Location:home.php");
}
else echo "login failed";
?>