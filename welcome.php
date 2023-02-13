<?php
session_start();
//deconnexion
if(isset($_POST['deconnexion'])){
    session_destroy();
//redirection vers la page login
    header('Location: login.php');
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <center>
       <h1> Welcome mister <?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ; ?></h1>
       <form action="#" method="post">
            <input type="submit" name="deconnexion" value="Deconnexion">
       </form>
       
    </center>

</body>
</html>