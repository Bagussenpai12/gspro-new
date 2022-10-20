<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GsPro-New</title>
</head>
<body>
    <div class="kotak">
        <h2>GsPro SMK JP 1</h2>
        <h3>Login Your Account</h3>

        <form action="process.php" method="POST">
            <label for="username">username</label><br>
            <input type="text" name="username" id="username" class="form-control">
            <br><br>
    
            <label for="password">password</label><br>
            <input type="password" name="password" id="password" class="form-control">
            <br><br>
    
            <button type="submit" class="btn-login">login</button>
        </form>
    </div>
</body>
</html>