<!DOCTYPE html>
<html>
<head>
    <title> Register </title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="layout.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="register">
    <h2>Create a new account</h2>
    <form action="action_register.php" method="post">
        <p>
        <label for="username">Username</label><br>
        <div class="tooltip">
        <input type="text" name="username"  required>
        <span class="tooltiptext">Only lowercase, at least 3 characters</span>
        </div>    
        </p>
        <p>
        <label for="password">Password</label><br>
        <div class="tooltip">
        <input type="password" name="password"  required>
        <span class="tooltiptext">One uppercase, 1 symbol, 1 number, at least 8 characters</span>
        </div>
        </p>    
        <p>
        <label for="password">Repeat Password</label><br>
        <div class="tooltip">
        <input type="password" name="repeat" required>
        <span class="tooltiptext">Password must match</span>
        </div>
        </p>
        <p class="register_submit">
        <input type="submit" value="Sign up">
        </p>
    </form>
    </div>

</body>
</html>