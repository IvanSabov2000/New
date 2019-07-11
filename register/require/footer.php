<footer id="sticky-footer" class="py-4 bg-dark text-white-50">

	<?php require_once 'menu.php'; 
        require_once 'function.php';
        $posts_search = get_posts();
if(isset($_POST['btn_search'])){
  $search = explode(" ", $_POST['search']);
  $count = count($search);
  $array = array();
  $i = 0;
  foreach ($search as $key) {
    $i++;
    if($i < $count) $array[] = "CONCAT (title, content) LIKE '%".$key."%' OR "; else $array[] = "CONCAT (title, content) LIKE '%".$key."%'";
  }

  $sql = "SELECT * FROM posts WHERE ".implode("", $array);
  $query = mysqli_query($connection, $sql);
  while($row = mysqli_fetch_assoc($query)) echo "<span><h1>".$post_search[0]['title']. "</h1>".$row['content']."</br></span>";

}?>


    <div class="container text-center">
      <small>&copy;Сабов Иван</small>
    </div>
  </footer>