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
    


<?php 
require('require/connect.php');
if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')"; 

    $result = mysqli_query($connection, $query);


    if($result)
        $smsg = "Все хорошо";

 else 
    $fsmsg = "Регистрация не удалась";
}

    ?>
<div style="display: none;"><?php var_dump($_POST);?></div>


  
<?php require 'require/menu.php';?>

    <div class="container">
            <form class="form-signin" action="" method="POST">
                <h2>Регистрация</h2>
<?php if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg;?></div><?php } ?>

<?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fsmsg;?></div><?php } ?>
      <input type="text" name="username" placeholder="Имя" class="form-control" required="">
      <input type="password" name="password" placeholder="Пароль" class="form-control" required="">
      <input type="text" name="email" placeholder="Почта" class="form-control" required="">
      <a href="index.php"><input class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 3px" name="btn" value="Зарегистрироваться"></a>
      <a href="login.php" class="btn btn-lg btn-primary btn-block" style="margin-top: 3px;">Вход</a>
    </form>
</div>



  
<?php require 'require/footer.php'; ?>
</body>
</html>