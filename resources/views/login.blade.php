<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>User Registration</h2>

<form class="format" method="post" action="/login">
    @csrf
    
    <label class="design" for="email">Email:</label>
    <input class="design" type="email" name="email" required>
    <br>

    <label class="design" for="password">Passw:</label>
    <input class="design" type="password" name="password" required>
    <br>

    <input class="buton" type="submit" value="login">
</form>
</body>
</html>