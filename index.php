<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr>
            <td>
                <form action="login.php" method="post">
                    <h1>Login</h1>
                    <hr>
                    <input type="text" name="email" placeholder="email" class="inputAlani" required>
                    <input type="password" name="password" placeholder="Password" class="inputAlani" required>
                    <input type="submit" name="login" value="Login" class="buton">
                </form>
            </td>
            <td><form action="register.php" method="post">
                <h1>Register</h1>
                <hr>
                <input type="text" name="email" placeholder="email" class="inputAlani" required>
                <input type="password" name="password" placeholder="Password" class="inputAlani" required>
                <input type="submit" name="register" value="Register" class="buton">
            </form></td>
        </tr>
    </table>
</body>
</html>