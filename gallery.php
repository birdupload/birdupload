<!doctype html>
<html>
	<head>
		<title>birdupload: gallery</title>
	</head>
</html>
<center><nav>
<a href="upload.php"> home </a> | gallery
</center></nav>


<img src="/images/logo.png"/>
<p>gallery will not work for sometimes ...</p>





<?php
 
$files = array_diff(scandir('uploads'), array('..', '.'));
 
foreach($files as $file){
    $extension =  pathinfo('uploads/' . $file, PATHINFO_EXTENSION);
    if(in_array($extension, ['png',' jpeg', 'gif','jpg',' '])){
        echo '<img src="./uploads/' . $file. '" width="100">';
    }
