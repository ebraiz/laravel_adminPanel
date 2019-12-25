@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1 class="title">
      Ads Management
      <!-- <small></small> -->
   </h1>
   <ol class="breadcrumb">
      <li><a href="user_management.php">
            <i class="fa fa-dashboard"></i> Ads Management
         </a>
      </li>
      <!-- <li class="active"></li> -->
   </ol>
</section>
<div class="page-wrapper padding25">
   <!-- Main content -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive m-t-40">
                     <table id="example23" class="text-center display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Is Active</th>
                            <th>Is Featured</th>
                            <th>Featured Date</th>
                            <th>Details</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($am as $key => $data)
                            <tr>
                              <td>{{$data->ads_id}}</td>
                              <td>{{$data->user_id}}</td>
                              <td>{{$data->category}}</td>
                              <td>{{$data->title}}</td>
                              <td>{{$data->price}}</td>
                              <td>
                                <input type="checkbox">
                              </td>
                              <td>
                                <input type="checkbox">
                              </td>
                              <td>{{$data->feature_date}}</td>
                              <td>
                                <a data-toggle="modal" data-target="#myModal"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.content -->
</div>
<!-- /.page-wrapper -->
@endsection

@section('javascript')
<script>
   $('.ads_management').parents('.treeview').addClass('menu-open');
   $('.ads_management').parents('.treeview-menu').css({'display':'block'});
   $('.ads_management').addClass('active');
</script>
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
            <h3 class="modal-title">Advertisment Details</h3>
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
                  <input type="text" class="form-control" value="Seller Location" id="location" readonly>
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
                  <div class="col-lg-12 col-md-12 col-xs-12 padding0">
                    @for ($i=1; $i<=5; $i++)
                      <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="{{$i-1}}" data-href="ads_management/{{$i}}" data-image="assets/bower_components/images/Large_imageGallery{{$i}}.jpg" data-target="#image-gallery" data-toggle="modal">
                          <img src="assets/bower_components/images/imageGallery{{$i}}.jpg" class="img-thumbnail">
                        </a>
                      </div>
                    @endfor
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

<!--Large Image Modal-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <?php 
      for($i=1; $i<=5; $i++){
        $active = ($i == 1) ? 'active' : ''; 
    ?>
      <li data-target="#myCarousel" data-slide-to="<?=$i-1?>" class="<?=$active?>"></li>
    <?php } ?>
  </ol>

  <div class="carousel-inner">
    
      @for($i=1; $i<=5; $i++)
        $active = ($i == 1) ? 'active' : '';

    <div class="item {{$active}}">
      <img src="assets/bower_components/images/Large_imageGallery{$i}.jpg" class="img-responsive col-md-12" id="image-gallery-image">
    </div>
    @endfor
  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div> 
@endsection