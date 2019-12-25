<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- favicon ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/bower_components/images/favicon.png">
        
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/css/bootstrap.min.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
        
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/css/ionicons.min.css') }}">
        
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/css/AdminLTE.min.css') }}">
        
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/css/_all-skins.min.css') }}">
        
        <!-- DataTables CSS Stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/css/jquery.dataTables.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/css/rowDetails.css') }}">
        
        <!-- Custom CSS Stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/css/style.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bower_components/css/daterangepicker.css') }}" />
        
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Header Here -->
            <header class="main-header fixed">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>P</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">    
                        <img src="{{ URL::asset('assets/bower_components/images/logo.png') }}" class="logo-pic" alt="Admin Panel Logo">
                        <b>Admin Panel</b>
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-fixed-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ URL::asset('assets/bower_components/images/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                <span class="hidden-xs">Administrator</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="{{ URL::asset('assets/bower_components/images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                        <p>
                                            Admin User
                                            <small>admin_user@technado.co</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" data-toggle="modal" data-target="#myModal_header" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Modal Form Edit Administrator Profile-->
            <div class="modal fade" id="myModal_Edit_profile" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <form action="/" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Edit Profile</h3>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success add-attr" data-dismiss="modal">Update</button>
                                <button type="button" class="btn btn-primary remove-attr">Edit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <aside class="main-sidebar fixed">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="treeview dashboard">
                            <a href="dashboard_users">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="dashboard_users">
                                  <a href="dashboard_users">
                                    <i class="fa fa-circle-o"></i> 
                                    Users'
                                  </a>
                                </li>
                                <li class="dashboard_ads">
                                  <a href="dashboard_ads">
                                    <i class="fa fa-circle-o"></i> 
                                    Ads'
                                  </a>
                                </li>
                            </ul>
                        </li>
                        <li class="user_management">
                            <a href="/user_management">
                                <i class="fa fa-user-o"></i> 
                                <span>Users' Management</span>
                            </a>
                        </li>
                        <li class="categories_management">
                            <a href="/categories_management">
                                <i class="fa fa-list"></i> 
                                <span>Categories' Management</span>
                            </a>
                        </li>
                        <li class="ads_management">
                            <a href="/ads_management">
                                <i class="fa fa-buysellads"></i>
                                <span>Ads' Management</span>
                            </a>
                        </li>
                        <li class="jmmao_store">
                            <a href="/jmmao_store">
                                <i class="fa fa-shopping-cart"></i> 
                                <span>JMMAO Store</span>
                            </a>
                        </li>
                        <li class="treeview content_management">
                            <a href="#">
                                <i class="fa fa-file"></i>
                                <span>Content Management</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="cm_term">
                                    <a href="cm_term">
                                        <i class="fa fa-circle-o"></i> 
                                        Terms and Conditions
                                    </a>
                                </li>
                                <li class="cm_privacy">
                                    <a href="cm_privacy">
                                        <i class="fa fa-circle-o"></i> 
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="cm_how">
                                    <a href="cm_how">
                                        <i class="fa fa-circle-o"></i> 
                                        How to use?
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="google_analytics">
                            <a href="#">
                                <i class="fa fa-area-chart"></i> 
                                <span>Google Analytics</span>
                            </a>
                        </li>
                        <li class="crashlytics">
                            <a href="#">
                                <i class="fa fa-asterisk"></i> 
                                <span>Crashlytics</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.1.0
                </div>
                Copyright &copy; 2018 <strong><a href="#">Admin Panel</a></strong>. All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->


        <script>  $('title').text("Admin Panel | " + $('.title').text()); </script>
        <!-- jQuery 3 -->
        <script src="{{ URL::asset('assets/bower_components/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bower_components/js/bootstrap.min.js') }}"></script>
        
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ URL::asset('assets/bower_components/js/jquery-ui.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ URL::asset('assets/bower_components/js/moment.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bower_components/js/daterangepicker.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('assets/bower_components/js/adminlte.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bower_components/js/jquery.dataTables.min.js') }}"></script>

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
            
            function readURL(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                  $('#upload_picture,#upload_logo').attr('placeholder',input.files[0].name);
                  /* $('#user_image').attr('src', e.target.result);*/
                };
                reader.readAsDataURL(input.files[0]);
              }
            }
            
            $(document).ready(function() {
            
             $('#example23').DataTable({
                'paging':true,
                'info':true,
                'ordering':true,
                'lengthMenu': [[10, 15, 20, -1], [10, 15, 20, "All"]]
             });
            
              //(View/layouts/header.php)
              //In Modal for Edit Administrator Profile form: Edit Button, Confirm Pass, New Pass fields will be hidden.
              $('.add-attr, .cpass, .npass').hide();
            
              //OnClick Function for Adding Attribute Starts here.
              $('.add-attr').click(function(){
            
                //(View/layouts/header.php)
                //In Modal for Edit Administrator Profile form: Edit Button, Confirm Pass, New Pass fields will be hidden when button with class ".add-attr" will be clicked.
                $('.add-attr, .cpass, .npass').hide();
                $('input').attr('readonly','readonly'); //Readonly when Update Button is clicked.
                $('.remove-attr').show(); // Show EDIT button when Update button is clicked.
              });
              //OnClick Function for Adding Attribute Ends here.
              
              //OnClick Function for Removing Attribute Starts here.
              $('.remove-attr').click(function(){            
                $('.remove-attr').hide();
            
                //This class will Enabled the file upload field.
                $('.Edit_Upload').removeAttr('disabled', 'disabled');
            
                //(View/layouts/header.php)
                //In Modal for Edit Profile form: Edit Button, Confirm Pass and New Pass fields are visible and all input fields will be editable when EDIT Button will be clicked.
                $('.add-attr, .cpass, .npass').show(); 
                $('input').removeAttr('readonly','readonly'); 
                //Make fields editable when EDIT button is clicked.
                $('.readonly').attr('readonly','readonly'); 
                //Make text field with upload file permenantly readonly
              });
            });
        </script>
        @yield('javascript')
        @yield('modals')
    </body>
</html>