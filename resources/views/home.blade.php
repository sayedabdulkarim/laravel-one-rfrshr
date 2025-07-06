<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Congrats you r loggedin</p>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    @else 
        <div>
            <h1>Register</h1>
            <form action="/register" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br><br>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br><br>
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br><br>
        
                <button type="submit">Register</button>
            </form>
        </div>
    @endauth

</body>
</html>