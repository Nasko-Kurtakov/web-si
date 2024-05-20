<?php

session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["email"] != "") {

    $email = $_SESSION["user"]["email"];
} else {
    header("Location: ./error.php");
}

?>

<html>

<head>

</head>

<body>
    <h5>Welcome home, <?php echo $email ?>
    </h5>
    <form action="POST" method="../controllers/logoutController.php">
        <button type="submit">Log Out</button>
    </form>
</body>

</html>