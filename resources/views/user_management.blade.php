@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 class="title">
     User Management
     <!-- <small></small> -->
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="#">
        <i class="fa fa-dashboard"></i>
        User Management
      </a>
    </li>
     <!-- <li class="active"></li> -->
  </ol>
</section>

<!-- Main content -->
<div class="container-fluid padding25">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-body">
               <div class="table-responsive m-t-40">
                  <div class="form-group">
                     <table id="example24" class="text-center display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th></th>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Contact</th>
                              <th>Is Blocked</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /.content -->
@endsection

@section('javascript')
  <script>
    $('.user_management').parents('.treeview').addClass('menu-open');
    $('.user_management').parents('.treeview-menu').css({'display':'block'});
    $('.user_management').addClass('active');
  </script>
  <script src='assets/bower_components/js/rowDetails.js'></script>
  <script src='assets/bower_components/js/imageGallery.js'></script>
@endsection

@section('modals')
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">User Details</h3>
         </div>
         <div class="modal-body">
            <form action="/" method="post">
               <div class="form-group">
                  <label for="category">Category:</label>
                  <input type="text" class="form-control" value="Category here" id="category" readonly>
               </div>
               <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" class="form-control" value="Title here" id="title" readonly>
               </div>
               <div class="form-group">
                  <label for="price">Price:</label>
                  <input type="text" class="form-control" id="price" value="Price here" readonly>
               </div>
               <div class="form-group">
                  <label for="desc">Description:</label>
                  <textarea class="form-control textarea" rows="4" cols="85" id="desc" readonly="readonly">Brief description here</textarea>
               </div>
               <div class="form-group">
                  <label for="location">Seller Location:</label>
                  <input type="text" class="form-control" value="Seller Location here" id="location" readonly>
               </div>
               <div class="form-group">
                  <label for="usr">Contact By:</label>
                  <i><img src="assets/bower_components/images/call.png"></i>
                  <i><img src="assets/bower_components/images/chat.png"></i>
                  <i><img src="assets/bower_components/images/mail.png"></i>
                  <i><img src="assets/bower_components/images/sms.png"></i>
               </div>
               <div class="form-group">
                  <label for="image_gallery">Image Gallery:</label>
                  <div class="row">
                     <div class="row margin-left-right-15">
                       <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                              data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                              data-target="#image-gallery">
                               <img class="img-thumbnail"
                                    src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                    alt="Another alt text" 
                                    width="100" 
                                    height="100">
                           </a>
                       </div>
                       <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test2"
                              data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                              data-target="#image-gallery">
                               <img class="img-thumbnail"
                                    src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                    alt="Another alt text" 
                                    width="100" 
                                    height="100">
                           </a>
                       </div>

                       <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test3"
                              data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                              data-target="#image-gallery">
                               <img class="img-thumbnail"
                                    src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                    alt="Another alt text" 
                                    width="100" 
                                    height="100">
                           </a>
                       </div>
                       <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test4"
                              data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                              data-target="#image-gallery">
                               <img class="img-thumbnail"
                                    src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                    alt="Another alt text" 
                                    width="100" 
                                    height="100">
                           </a>
                       </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test5"
                              data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                              data-target="#image-gallery">
                               <img class="img-thumbnail"
                                    src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                    alt="Another alt text" 
                                    width="100" 
                                    height="100">
                           </a>
                       </div>
                        </div>

                        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                              <div class="modal-content width-63">
                                 <div class="modal-header">
                                      <h4 class="modal-title" id="image-gallery-title"></h4>
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                      </button>
                                 </div>
                                 <div class="modal-body">
                                      <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                 </div>
                                 <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                      </button>

                                      <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                      </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
@endsection