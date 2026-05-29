<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>

    <h1>Session Form</h1>

    <form action="index.php" method="POST">

        <label for="username">Name</label>

        <input
            type="text"
            name="username"
            placeholder="Username"
        >

        <button type="submit">
            Login
        </button>

    </form>

    <?php

    if(isset($_POST['username'])) {

        $_SESSION['username'] =
        $_POST['username'];

        echo "<h3>Welcome " .
        $_SESSION['username'] .
        "</h3>";
    } 
    else {
        echo "please fill the username field.";
    }
    ?>

</body>
</html>