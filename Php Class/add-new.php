<?php

include 'views/header.php';

?>

<div class="container">
        <form action="create_page.php" method="post" >
          <div class="form-group">
            <label for="page_id">Page Title</label>
            <input type="text" name="page_title" class="form-control" id="page_id" placeholder="Page Title" >
          </div>   
          <div class="form-group">
              <label for="page-desc">Page Description</label>
              <textarea class="form-control" name="page_descrtiption" id="page-desc" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="update">Save</button>
        </form>
      </div>

<?php

include 'views/footer.php';

?>