<!doctype html>
<html>
      <body>
             <title>upload - birdupload</title>
       </body>
<nav><a href="gallery.php">gallery</a></nav>





<!-- stylesheet -->

<!-- /stylesheet -->


<form action="upload.php" method="post" enctype="multipart/form-data">
browse:
<input type="file" name="image"><br/><br/>
<input type="submit" name="upload" value="continue">
</form>

      <ul>
            <li>sent file name: <?php echo $_FILES['image']['name'];  ?>
            <li>file size: <?php echo $_FILES['image']['size'];  ?>
            <li>file type: <?php echo $_FILES['image']['type'] ?>
         </ul>
  
<?php

    if(isset($_POST['upload'])){
    $image_name = md5($_FILES['image']['name']);
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name= $_FILES['image']['tmp_name'];
    @$desc = $_POST['desc'];
    move_uploaded_file($image_tmp_name,"uploads/$image_name");
    echo "<img src='uploads/$image_name' width='350' height='250'><br>";
    echo "your image:";

}



            
           
?>

