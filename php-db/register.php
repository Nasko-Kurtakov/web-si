<?php

use \PDO;

class Database
{
    private $connection;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'test_si';
        $user = 'hwtbmAdmin';
        $pass = 'admin';

        try {
            $this->connection = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function registerUser($email, $password)
    {
        $queryString = "INSERT INTO Users (email, password) VALUES (?, ?)";

        try {
            $stmt = $this->connection->prepare($queryString);
            $success = $stmt->execute([$email, password_hash($password, PASSWORD_DEFAULT)]);

            return $success;
        } catch (PDOException $e) {
            // Handle the exception (e.g., log it or return false)
            return false;
        }
    }

    public function loginUser($email, $password)
    {
        $queryString = "SELECT user_id, email, password FROM Users WHERE email = ?";
        $stmt = $this->connection->prepare($queryString);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            return $user;
        } else {
            // Login failed
            return false;
        }
    }

    public function getUsers()
    {
        $query = "SELECT email,name FROM users";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll();

        return $users;
    }
}

$db = new Database();

$users = $db->getUsers();

print_r($users);
?>

<html>

<head></head>

<body>
    <?php
    for ($i = 0; $i < count($users); $i++) {
        echo "<div>" . $users[$i]["name"] . "</div>";
    }
    ?>
</body>

</html>