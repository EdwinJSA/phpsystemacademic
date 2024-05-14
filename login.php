<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "natasha" && $password == "21012177" || $username == "belkis" && $password == "12345678") {
            header("Location: inicio.php");
            exit();
        } else {
            echo "<p>El usuario o la contraseña es incorrecta.</p>";
        }
    }
    ?>
    <div class="container">
        <form action="" method="post">
            <label for="username">Usuario</label>
            <input type="text" name="username" id="username">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
