<?php
session_start();
 if(isset($_POST['submit'])){
    $name = htmlentities($_POST['name']);
    $password = ($_POST['password']);
    //hasher le password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if(!empty($name)){
        if(!empty($hashed_password)){
            $_SESSION['username'] = $name;
            $_SESSION['password'] = $hashed_password;

            //redirection vers la page welcome
            header('Location: welcome.php');
        }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily_Challenge | W7_D3</title>
</head>
<body>
    <center>
        <h1>Daily Challenge : Login Page</h1>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div>
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" placeholder="Your Name">
            </div>
            <br>
            <div>
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" placeholder="Your Password">
            </div>
            <br>
            <button type="submit" name="submit">Connexion</button>
        </form>
    </center>
    

    
</body>
</html>