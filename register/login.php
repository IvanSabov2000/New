<?php
session_start();
require 'require/connect.php';
    $query = "SELECT * FROM users WHERE email='$email' and password='$password'";
if(isset($_POST['btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}


$result = mysqli_query($connection, $query) or die (mysqli_error($connection));
$count = mysqli_num_rows($result);

if($count == 1)
    $_SESSION['email'] = $email;
else
    $fmsg = "Ошибка";

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    echo "Hello".$email. "";
    echo "Вы вошли";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Register</title>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php require 'css.php';?>
<?php require 'require/connect.php'?>

</head>
<body>
    





<!--   
<?php require 'require/menu.php';?> -->


  

    <div class="container">
            <form class="form-signin" action="" method="POST">
                <h2>Вход</h2>
<input type="text" name="email" placeholder="Почта" class="form-control" required="">
      <input type="password" name="password" placeholder="Пароль" class="form-control" required="">
          <a href="index.php"><input class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 3px" name="btn" value="Войти"></a>
              <a href="register.php" class="btn btn-lg btn-primary btn-block" style="margin-top: 3px;">Регистрация</a>
    </form>
</div>



<?php require 'require/footer.php'; ?>
</body>
</html>