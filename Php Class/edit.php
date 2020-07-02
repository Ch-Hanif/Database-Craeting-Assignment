<?php

include 'views/header.php';

include 'connection.php';

$id=$_REQUEST['page_id'];
// echo $id;

$edit ="SELECT * FROM pages WHERE page_id=$id";

$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
	$pagetitle = $_POST['page_title'];
	$pagedes = $_POST['page_descrtiption'];

	$update= "UPDATE pages SET page_title='$pagetitle' , page_descrtiption='$pagedes' WHERE page_id=$id";
	if (mysqli_query($connect, $update)) {
		echo "Data Update";
	}else{
		echo "error";
	}

}

?>
<div class="container">
        <form action="" method="post" name="mydata">
          <div class="form-group">
            <label for="page_title">Page Title</label>
            <input type="text" name="page_title" class="form-control" id="page_title" value="<?php echo $row['page_title'];  ?>">
          </div>   
          <div class="form-group">
              <label for="page-desc">Page Description</label>
              <textarea class="form-control" name="page_descrtiption" id="page-desc" rows="3"><?php echo $row['page_descrtiption'];  ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
      </div>
<?php



include 'views/footer.php';

?>