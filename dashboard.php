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
    <div class="panel panel-primary">
      <div class="panel-heading">Panel Heading</div>
      <div class="panel-body">Panel Content</div>
    </div>

  <div class="col-md-4 well">
    <div class="panel panel-default">
      <div class="panel-body">Total Posts : 5</div>
    </div>
  </div>
  <div class="col-md-4 well">
    <div class="panel panel-default">
      <div class="panel-body">Total Posts : 5</div>
    </div>
  </div>
  <div class="col-md-4 well">
    <div class="panel panel-default">
      <div class="panel-body">Total Posts : 5</div>
    </div>
  </div>

</main>
<?php
  require_once('footer.php');
?>