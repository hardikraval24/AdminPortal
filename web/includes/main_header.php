<!DOCTYPE html>
<html lang="en">  
  <?php include_once "includes/header.php"; ?>
  <?php auth(); ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin Portal</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome, <?php echo $_SESSION['user']['name']; ?>!</span>                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
              <?php include_once "includes/sidebar.php"; ?>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
          <?php include_once "includes/top_nav.php"; ?>
        <!-- /top navigation -->