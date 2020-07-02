<?php

include'connection.php';

$allpages = "SELECT * FROM pages";

$result = mysqli_query($connect, $allpages);
?>
<div class="container">

<table class="table table-bordered">
	<thead>
    <tr>
      <th scope="col">Page ID</th>
      <th scope="col">Page Title</th>
      <th scope="col">Page Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
   <tbody>


<?php
if (mysqli_num_rows($result)> 0) {
	while ($row = mysqli_fetch_assoc($result)) {
?>


 
    <tr>
      <th scope="row"><?php echo $row["page_id"]; ?></th>
      <td><?php echo $row["page_title"]; ?></td>
      <td><?php echo $row["page_descrtiption"]; ?></td>
      <td>
      	<a href="../edit.php?page_id= <?php echo $row["page_id"]; ?>" class="btn btn-primary">Edit</a>
        <a href="../delete.php?page_id= <?php echo $row["page_id"]; ?>" class="btn btn-danger">Delete</a>
        <a href="../view.php?page_id= <?php echo $row["page_id"]; ?>" class="btn btn-secondary">View</a>
    </td>

    </tr>
     
		
		<!-- echo 'ID: ' .$row["page_id"]. 'page Title: '.$row["page_title"].'page Descrption '.$row["page_descrtiption"].'<br>' ; -->
<?php
	}
	?>
	

<?php
}else{
	echo 'error' ;
}

?>
</tbody>
</table>
	
</div>