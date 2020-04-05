<?php
  require_once('header.php');

  if(isset($_GET['type']))
    $type = $_GET['type'];
  else
    $type = 'Post';
?>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add <?php echo $type; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="list-post.php"class="btn btn-sm btn-outline-secondary">View</a>
            <a href="edit-post.php"class="btn btn-sm btn-outline-secondary">Edit</a>
          </div>
        </div>
      </div>

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Add <?php echo $type; ?> Form</h4>

          <?php
            if(isset($_GET['msg']))
              echo '<span class="alert alert-success">'.$_GET['msg'].'</span><hr class="mb-3">';
          ?>
          <form class="needs-validation" novalidate="" method="POST" action="post-functions.php" enctype="multipart/form-data">

            <input type="hidden" name="action" value="add-new">

            <input type="hidden" name="reg_date" value="<?php echo date('d/m/y') ?>">
            <div class="row">
              <div class="col-md-7 mb-3">
                <label for="post-title">Title</label>
                <input type="text" class="form-control" id="post-title" placeholder="" value="" required="" name="title">
                <div class="invalid-feedback">
                  Valid Title is required.
                </div>
              </div>

              <div class="col-md-5 mb-3">
                <label for="country">Category</label>
                <select class="custom-select d-block w-100" id="country" required="" name="category">
                  <option value="">Choose <?php echo $type; ?> Category</option>
                  <option value="News">News</option>
                  <option value="Events">Events</option>
                  <option value="Articles">Articles</option>
                  <option value="Press Release">Press Release</option>
                  <option value="Speeches">Speeches</option>
                  <option value="Campaign">Campaign</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid category of posts.
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="post-description">Description</label>
                <textarea class="form-control" id="post-description" placeholder="" value="" required="" name="description"></textarea>
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
                <label for="post-image">Image Name (with .jpg )</label>
                <input type="text" class="form-control" name="image">
                OR
              </div>
              
              <div class="col-md-6 mb-3">
                <label for="post-image">Image</label>
                <input type="file" class="form-control" name="image_file">
              </div>

            </div>




            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Add <?php echo $type; ?></button>
            <hr class="mb-4">
          </form>
        </div>


      </main>
    </div>
  </div>
<?php
  require_once('footer.php');
?>