<?php
  session_start();
  include "common/functions.php";
?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Code School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
    <?php
        if(isset($_SESSION['user']))
        { 
    ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>      
      <li class="nav-item active">
        <a class="nav-link" href="fileupload.php">File Upload <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="multiple_fileupload.php">Mulitple File Upload <span class="sr-only">(current)</span></a>
      </li>      
      <li class="nav-item active">
        <a class="nav-link" href="form_validation.php">Validation <span class="sr-only">(current)</span></a>
      </li>	
      <li class="nav-item active">
        <a class="nav-link" href="udf.php">UDF <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="users.php">All Users <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn btn-primary" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>      
      <?php 
        }
        else
        {
            echo '
            <li class="nav-item active">
              <a class="nav-link" href="register.php">Registration <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            </li>';
        }
      ?>      
    </ul>    
  </div>
</nav>
