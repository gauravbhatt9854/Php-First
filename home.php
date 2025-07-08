<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>you are in home page</h1>
    <form method="post" action="logout.php">
        <button type="submit">log out</button>
    </form>

    <?php
    $user = $_COOKIE['name']; // Accessing cookie data
    echo " my name is : " . $user;

    session_start(); // Must be called before accessing $_SESSION
    $sessionUser = $_SESSION["username"]; // Accessing session data
    echo " and session user is : " . $sessionUser;
    ?>


</body>

</html>