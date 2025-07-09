<?php
// $name= $_GET['name'];
// $pass= $_GET['password'];


$name2= $_POST['name'];
$pass2= $_POST['password'];

// associated array _post and _get has value of passed in body and params

echo "post start  </br>";
print_r($_POST);
echo "</br> post end  </br>";

// save user in local file

// $currDir= __DIR__.'/users.txt';
$currDir= __DIR__.'/objects.txt';
echo $currDir;
if(file_exists($currDir)) 
{
    $file = file_get_contents($currDir);
    echo "</br>";
    print_r($file);
    $users = json_decode($file , true) ?? [];
    echo "</br>";

    foreach ($users as $userid => $info) {
    echo "User ID: $userid<br>";
    echo "Name: " . $info["name"] . "<br><br>";

    $users["user03"] = ["name"=> "joshi"];
    file_put_contents($currDir , json_encode($users , JSON_PRETTY_PRINT));
}


    // echo $users["user01"];

}

// echo $name2."</br>";
// echo $pass2."</br>";

// if(strcmp(strtolower($name2) , "gaurav")==0 && strcmp($pass2 , "1234")==0)
// {
//     echo "you are valid user";
//     echo "< font color=red >you are valid user </font>";
//     setcookie("name" , $name2 );
//     setcookie("password" , $pass2);
//     session_start();
//     $_SESSION["username"]=$name2;
//     header("Location:home.php");
// }
// else echo "login failed";
?>