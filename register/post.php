<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>index</title>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php require 'css.php';?>



</head>
<body>
   <?php require 'require/connect.php';
     require 'require/function.php';
 require 'require/menu.php';


$post_id = $_GET['post_id'];
//ЕСЛИ В POST_ID НЕ ЧИСЛА, ОСТАНОВИМ СКРИПТ
if (!is_numeric($post_id)) exit();

//ПОЛУЧАЕМ МАССИВ ПОСТА
$post = get_post_by_id($post_id);
?>

<div class="container" style="margin-top:">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1><?=$post['title']?></h1>
            </div>
            <ul class="list-inline">
                
            </ul>
            <hr>
            <div class="post-content">
                <img src="<?=$post['image']?>" align="left" style="padding: 0 10px 10px 0; max-width: 400px; max-height: 300px;">
                <?=$post['content']?>
            </div>
        </div>
           </div>
</div>



<?php require 'require/footer.php'; ?>
</body>
</html>
