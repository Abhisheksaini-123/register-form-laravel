<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<style>

    h2{
        /* color:red; */
        text-align :center;
    }
    .format{
        text-align:center;
    }
    .design{

        padding:2px;
        margin:10px;
        color:red;
    }
    .buton{
        margin:20px;
        background-color:blue;
        padding:5px;
        border:5px solid;
    }

</style>
<body>
    <h2>User Registration</h2>

    <form class="format" method="POST" action="{{route('login')}}">
        @csrf
        <label class="design" for="name">Name:</label>
        <input class="design"type="text" name="name" required>
        <br>

        <label class="design" for="email">Email:</label>
        <input class="design" type="email" name="email" required>
        <br>

        <label class="design" for="password">Passw:</label>
        <input class="design" type="password" name="password" required>
        <br>

        <input class="buton" type="submit" value="register">
    </form>

    <p class="format">Already have an account? <a href="/login">Login</a></p>
</body>
</html>
