<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERPTool.de</title>
    <link rel="stylesheet" href="../../public/assets/css/User-start-login/start.css">
</head>
<body>
<div class="header">
    <a href="index.php">DataStream Dynamics</a>
</div>
<div class="container">
    <div class="login-container">
        <form class="login-form" method="POST">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Benutzername:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember Me</label>
            </div>
            <button type="submit" name="submit">Anmelden</button>
            <a href="#" class="forgot-password">Passwort vergessen?</a>
        </form>
    </div>
</div>
</body>
</html>