<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="valida.php" method="POST">
        <h1 class="title">Login</h1>
        <label>
            <i class="fa-solid fa-user"></i>
            <input placeholder="username" name="username" type="text" id="username">
        </label>
        <label>
            <i class="fa-solid fa-lock"></i>
            <input placeholder="password" name="password" type="password" id="password">
        </label>

        <button id="button" type="submit">Login</button>
    </form>
    
</body>
</html>