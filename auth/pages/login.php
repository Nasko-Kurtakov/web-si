<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign in</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <form method="POST" action="../controllers/loginController.php">
        <div>
            <label for="email">E-mail</label>
            <input id="email" type="text" name="email" />
        </div>
        <div>
            <label for="pass" name="pass">Password</label>
            <input id="pass" type="password" name="pass" />
        </div>
        <div>
            <button type="submit" id="login">Sign in</button>
            <div>No account? <a href="./register.php">Sign up!</a></div>
        </div>
    </form>
</body>

</html>