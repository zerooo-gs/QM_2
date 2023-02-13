<?php
  include '../include/header.php';
  include '../include/f3.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quality Management System</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> -->

    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Quality Management System</a>
            </div>
            <div class="collapse navbar-collapse d-none" id="navbar-collapse">
                
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</div>
                    <div class="email">user@fbc.lk</div>
                    <div class="btn-group user-helper-dropdown d-none">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
              <ul class="list">
                  <li class="header">MAIN NAVIGATION</li>
                  <li>
                    <a href="../forms/form_upload.php">
                      <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
                      <span>File Upload</span>
                    </a>
                  </li>
                  <li>
                    <a href="../../pages/record/records.php">
                      <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                      <span>Call Records</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="../../pages/record/files.php">
                      <i class="fa fa-file fa-2x" aria-hidden="true"></i>
                      <span>Files</span>
                    </a>
                  </li>
              </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
              <?php require_once '../include/legal.php'; ?>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar d-none">
            
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <span class="">
                <div class="col-md-2 mb-4"><select class="form-control show-tick rdp-1"><?php $df1 = date("Y");$df2 = date("Y", strtotime('-1 year'));for($i=$df1;$i>=$df2;$i--){echo "<option value=\"$i\">$i</option>"; }?></select></div><div class="col-md-2"><select class="form-control show-tick rdp-2"><?php for($iM =1;$iM<=12;$iM++){$dm=date("F", strtotime("$iM/12/10"));print '<option value="'.$dm.'"'.($dm==date("F", strtotime('m'))?'selected':'').'>'.$dm.'</option>';}?></select></div>
                <div class="col-md-2 mb-4"><select class="form-control show-tick rdp-3"><option value="0">All</option><option value="Fatal">Fatal</option><option value="Weakness">Weakness</option><option value="Good Call">Good Call</option><option value="Dissatisfaction">Dissatisfaction</option></select></div>
              </span>
                <h2>
                    CRUD APPLICATION
                    <small>--- <a>Create | Edit | Update | Delete</a> ---</small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                RECORDING MANAGEMENT
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive bx-1">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable exp1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Agent</th>
                                            <th>Agent ID</th>
                                            <th>Calling No.</th>
                                            <th>Weakness Fatal</th>
                                            <th>Weakness / Fatal</th>
                                            <th>Call Recording</th>
                                            <th>Month</th>
                                            <th>Year</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Agent</th>
                                            <th>Agent ID</th>
                                            <th>Calling No.</th>
                                            <th>Weakness Fatal</th>
                                            <th>Weakness / Fatal</th>
                                            <th>Call Recording</th>
                                            <th>Month</th>
                                            <th>Year</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php print $ot;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
<?php
  include '../include/script.php';
?>