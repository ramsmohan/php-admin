<?php
  require_once('header.php');
  $row = array();
?>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="list-post.php"class="btn btn-sm btn-outline-secondary">View</a>
            <a href="edit-post.php"class="btn btn-sm btn-outline-secondary">Edit</a>
          </div>
        </div>
      </div>

        <div class="col-md-8 order-md-1">

          <?php
            if(isset($_GET['msg']))
              echo '<span class="alert alert-success">'.$_GET['msg'].'</span><hr class="mb-3">';

            if(isset($_GET['post']))
            {
              $post = $_GET['post'];
              $sql = "SELECT * FROM posts WHERE id = ".$post." Limit 1";
              $result = $connect->query($sql);

              if($result->num_rows > 0) 
              {
                while($row = $result->fetch_assoc()) 
                {
          ?>
          <form class="needs-validation" novalidate="" method="POST" action="post-functions.php" enctype="multipart/form-data">

            <input type="hidden" name="action" value="edit-post">
            <input type="hidden" name="post" value="<?php echo $_GET['post'] ?>">

            <input type="hidden" name="reg_date" value="<?php 
            if(isset($row['reg_date'])) 
              echo $row['reg_date']; 
            else
             echo date('d/m/y') ?>">
            <div class="row">
              <div class="col-md-7 mb-3">
                <label for="post-title">Title</label>
                <input type="text" class="form-control" id="post-title" placeholder="" value="<?php 
                  if(isset($row['title']))
                    echo $row['title']; 
                  ?>" required="" name="title">
                <div class="invalid-feedback">
                  Valid Title is required.
                </div>
              </div>

              <div class="col-md-5 mb-3">
                <label for="country">Category</label>
                <select class="custom-select d-block w-100" id="country" required="" name="category">
                  <option value="">Choose Post Category</option>
                  <option value="News" <?php if( isset($row['category'] ) ) if($row['category'] == 'News') echo 'selected' ?>>News</option>
                  <option value="Events" <?php if( isset($row['category'] ) ) if($row['category'] == 'Events') echo 'selected' ?>>Events</option>
                  <option value="Articles" <?php if( isset($row['category'] ) ) if($row['category'] == 'Articles') echo 'selected' ?>>Articles</option>
                  <option value="Press" <?php if( isset($row['category'] ) ) if($row['category'] == 'Press Release') echo 'selected' ?>>Press Release</option>
                  <option value="Speeches" <?php if( isset($row['category'] ) ) if($row['category'] == 'Speeches') echo 'selected' ?>>Speeches</option>
                  <option value="Campaign" <?php if( isset($row['category'] ) ) if($row['category'] == 'Campaign') echo 'selected' ?>>Campaign</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid category of posts.
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="post-description">Description</label>
                <textarea class="form-control" id="post-description" required="" name="description"><?php if(isset($row['description'])) echo $row['description'] ?></textarea>
                  <script>
                    CKEDITOR.replace( 'post-description' );
                  </script>
                <div class="invalid-feedback">
                  Valid Description is required.
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="post-image">Image Name (with .jpg)</label>
                <input type="text" class="form-control" name="image" value="<?php if(isset($row['image'])) echo $row['image'] ?>">
                OR
              </div>
              
              <div class="col-md-6 mb-3">
                <label for="post-image">Image</label>
                <input type="file" class="form-control" name="image_file">
              </div>

            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Update Post</button>
            <hr class="mb-4">
          </form>

      <?php
          }
        }
        else
          header('Location:add-post.php');
      }
      ?>

      </div>

      </main>


<?php
  require_once('footer.php');
?>