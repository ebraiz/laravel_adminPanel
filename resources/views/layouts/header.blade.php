<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="bower_components/images/logo.png" class="logo-pic" alt="Admin Panel Logo"><b>Admin Panel</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
  
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="bower_components/images/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="bower_components/images/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce
                  <small>alexander.pierce@technado.co</small>
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
  
  <!-- Modal -->
  <div class="modal fade" id="myModal_header" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h3 class="modal-title">Edit Profile</h3>
       </div>
       <div class="modal-body">
        <form action="/" method="post" enctype="multipart/form-data">
           <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" value="Name here" id="name" readonly="readonly">
           </div>
           <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" value="Email here" id="email" readonly="readonly">
           </div>
           <div class="form-group npass">
              <label for="npass">New Password:</label>
              <input type="password" class="form-control" id="npass" readonly="readonly">
           </div>
            <div class="form-group cpass">
              <label for="cpass">Confirm Password:</label>
              <input type="password" class="form-control" id="cpass" readonly="readonly">
           </div>
            <div class="form-group padding10">
              <label>Upload Profile Picture</label>
              <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                        Browse... <input type="file" id="FileToUpload" disabled="disabled">
                    </span>
                </span>
                <input class="form-control FileUploadText" id="upload_picture" placeholder="Upload Profile Picture" readonly>
                <img id='img-upload' />
              </div>
            </div>
        </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-success add-attr" data-dismiss="modal">Update</button>
         <button type="button" class="btn btn-primary remove-attr">Edit</button>
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
     
   </div>
  </div>