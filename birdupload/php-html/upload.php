<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
      <body>
             <title>birdupload: upload</title>
       </body>
       </head>
<meta name="description" content="upload your image today">
<meta name="twitter:site" content="@">
       
<meta charset='UTF-8'/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
 
<nav><a href="gallery.php">gallery</a> | home</nav>
 
<h3> <img src="/images/logo.png"> </h3>
 
 
 
<!-- stylesheet -->
 
<!-- /stylesheet -->
 
<link rel="shortcut icon" href="favicon.ico">
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
    $allowed=array("image/jpeg", "image/gif", "image/png");
    if(!in_array($image_type,$allowed))
        echo "only jpg, gif, and png files are allowed.";
    else{
    move_uploaded_file($image_tmp_name,"uploads/$image_name");
    echo "<img src='uploads/$image_name' width='350' height='250'><br>";
    echo "your image:";
    }
 
}
 
 
 
 
           
           
?>