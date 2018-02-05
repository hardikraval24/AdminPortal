<?php
	include_once "includes/main_header.php";
	include "includes/Role.php";

	$r = new Role();
	$roles = $r->index();
?>
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="row">
      	<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Roles</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Role Name</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	foreach ($roles as $role)
                  	{
                  	 	echo "<tr>
	                      <th scope='row'>".$role->id."</th>
	                      <td>".$role->name."</td>
	                    </tr>";
                  	} 
                  	?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- /page content -->

<?php include_once "includes/main_footer.php"; ?>