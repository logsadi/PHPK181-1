<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//pt post
if(isset($_POST['sbm'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    echo $user.'<br/>'.$pass;
}
?>
</body>
<form action="" method="POST">
<input type="text" name="user">
<input type="text" name="pass">
<input type="submit" name="sbm">
</form>
</html>