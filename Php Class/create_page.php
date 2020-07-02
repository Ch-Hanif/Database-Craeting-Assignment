<?php

include 'Views/header.php';
// include 'connection.php';

$pagetitle = $_POST['page_title'];
$pagedes   = $_POST['page_descrtiption'];




//  echo $pagetitle ;
// echo $pagedes;


$insert = "INSERT INTO  pages(
page_title, page_descrtiption)
VALUES('$pagetitle', '$pagedes')";

if (mysqli_query($connect , $insert)) {
	echo '<br> Data Inserted ';
} else {
	echo 'there is an error';
}

 include 'Views/footer.php';

?>
