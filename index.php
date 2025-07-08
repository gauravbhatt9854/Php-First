<html>

<head>
</head>

<body>
    <h1>Hello </h1>

    <!-- <form method="get" action="checkLogin.php">
        <input type="text" name="name" id="name">
        <input type="password" name="password" id="password">
        <button type="submit">Submit</button>
    </form> -->


    <form method="post" action="checkLogin.php">
        <input type="text" name="name" id="name">
        <input type="password" name="password" id="password">
        <button type="submit" name="btn1">Submit</button>
    </form>

    <?php

    echo "user : gaurav </br>";
    echo "pasword : 1234 </br>";
    if (isset($_POST["btn1"])) {
        $name2 = $_POST['name'];
        $pass2 = $_POST['password'];

        // echo $name2."</br>";
        // echo $pass2."</br>";

        if (strcmp(strtolower($name2), "gaurav") == 0 && strcmp($pass2, "1234") == 0) {
            echo "you are valid user";
            echo "</br> <font color=red> you are valid user </font>";
        } else echo "login failed";
    }
    ?>


</body>

</html>