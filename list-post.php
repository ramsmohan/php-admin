<?php
  require_once('header.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="add-post.php"class="btn btn-sm btn-outline-secondary">Add</a>
        <a href="dashboard.php"class="btn btn-sm btn-outline-secondary">Dashboard</a>
      </div>
    </div>
  </div>

  <h2>Posts</h2>
  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Description</th>
          <th>Image</th>
          <th>Category</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $sql = "SELECT * FROM posts WHERE 1";
        $result = $connect->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['title']."</td>
                    <td>".substr($row['description'],0,30)."...</td>
                    <td>".$row['image']."</td>
                    <td>".$row['category']."</td>
                    <td>".$row['reg_date']."</td>
                    <td>
                        <a href='edit-post.php?post=".$row['id']."'>Edit</a>
                        <a href='remove.php?post=".$row['id']."'>Remove</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='7'><center>No Data Avaliable</center></td></tr>";
        }
      ?>

      </tbody>
    </table>
  </div>

</main>
<?php
  require_once('footer.php');
?>