<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <form method="POST" action="../controllers/registerController.php">
        <div>
            <label for="email">E-mail</label>
            <input id="email" type="text" name="email" />
        </div>
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" />
        </div>
        <div>
            <label for="pass">Password</label>
            <input id="pass" type="password" name="password" />
        </div>
        <div>
            <button type="submit" id="login">Register</button>
            <div>Already have an account? <a href="./login.php">Sign in from here</a></div>
        </div>
    </form>
</body>

</html>