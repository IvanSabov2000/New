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
   <?php require 'require/connect.php'?>
    <?php require 'require/function.php';?>



  
<?php require 'require/menu.php';?>
<!-- 

<div class="waveWrapper waveAnimation">
  <div style="color: white; z-index: 1000000;"><h1>THIS IS BLOG!</h1></div>
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>

 -->

<?php 
$posts = get_posts();

foreach ($posts as $post): ?> 
<div class="container" style="margin-top: 5px;">
<div class="row">
  <div class="col-md-12">

<div class="col-md-10 blogShort">

                  <a href="post.php?post_id=<?=$post['id']?>"> <h2 style="color: #5c1087;"><?=$post['title']?></h2></a>
                     <img src="<?=$post['image']?>" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" style="max-width: 300px; max-height: 200px;">
                             <article><p>
                              <?= mb_substr($post['content'], 0, 550, 'UTF-8'). '...'?>
                                                        </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="post.php?post_id=<?=$post['id']?>" id="post_btn">Читать</a> 
                 </div>

        </div>
       </div>
      </div>
    </div>
  </div>
</div>
 <?php endforeach; ?>




<?php require 'require/footer.php'; ?>
</body>
</html>