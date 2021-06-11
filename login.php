<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-image: url(bg1.jpg); background-size: cover; font-family: 'Times New Roman', Times, serif;">
    <main>
        <section>
            <form method="POST" action="aksi_login.php">
                <table class="center">
                    <tr>
                        <td>
                            <h1>Login</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Username:</label>
                            <br>
                            <input required name="username" placeholder="Your Username...">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password:</label>
                            <br>
                            <input required name="password" type="password" placeholder="Your Password...">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br>
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="register.html">Creat a new Account</a>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </main>
</body>
</html>