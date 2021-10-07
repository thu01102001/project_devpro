





 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta content="webthemez" name="author" />
    <title>Admin DEALBOOK</title>
	<!-- Bootstrap Styles-->
    <link href="../assets/admin/css/bootstrap.min.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="../assets/admin/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/admin/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/admin/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/favicon_io/favicon-16x16.png">
    <!-- load ckeditor vao day -->
    <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong><i class="fas fa-book-open" style="margin-right: 14px;"></i>DEALBOOK</strong></a>
				<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-user"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php" class="active-menu"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?controller=categories"><i class="fa fa-desktop"></i>List categories</a>
                    </li>
					 
					 <li>
                        <a href="index.php?controller=products"><i class="fa fa-sitemap"></i>List products</a>
                    </li>	
                    <li>
                        <a href="index.php?controller=users"><i class="fas fa-user"></i></i>Users</a>
                    </li>
                    
                    <li>
                        <a href="index.php?controller=orders"><i class="fa fa-table"></i>Orders</a>
                    </li>
                    <li>
                        <a href="index.php?controller=news"><i class="fa fa-edit"></i>News</a>
                    </li>
                    <li>
                        <a href="index.php?controller=slides"><i class="fa fa-edit"></i>Slides</a>
                    </li>

                    <li>
                        <a href="index.php?controller=login&action=logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                <h2 class="page-header">
                    Tables Page <small>Responsive tables</small>
                </h2>
                
                <ol class="breadcrumb">
                <?php if(isset($_SESSION['email'])): ?>
                    <li>Hello <a href="#" style = "font-weight: 600; color: #F36A5A;"><?php echo $_SESSION['email']; ?></a>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-heart"></i>
                    </li>
                <?php endif; ?>
                </ol> 				
                <?php echo $this->view; ?>
		    </div>
        </div>
               <footer><p style="position: absolute; left: 3%;color: white;">Template by: Thu KMA</p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>

