@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1 class="title">
      JMMAO Store
      <!-- <small>My Events</small> -->
   </h1>
   <ol class="breadcrumb">
      <li>
         <a href="#">
            <i class="fa fa-dashboard"></i> JMMAO Store
         </a>
      </li>
      <!-- <li class="active"></li> -->
   </ol>
</section>

<div class="page-wrapper padding25">
   <div class="row page-titles">
      <div class="col-md-10 align-self-center">
         <!-- <h3 class="text-primary">Event Management - My Events</h3> -->
      </div>
      <div class="col-md-2 text-right">
         <input type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2" value="Add">
      </div>
   </div>
   
   <!-- Main content -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive m-t-40">
                     <table id="example23" class="text-center display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Logo</th>
                              <th>Discount Percentage</th>
                              <th>Available</th>
                              <th>Visible Date</th>
                              <th>Details</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($js as $key => $data)
                           <tr>
                              <td>{{$data->jmmao_id}}</td>
                              <td>{{$data->name}}</td>
                              <td>
                                 <a title="click on image for large view" data-toggle="modal" data-target="#showImage">
                                   <img src="{{$data->logo}}" alt="logo">
                                 </a>
                              </td>
                              <td>{{$data->dis_percentage}}</td>
                              <td>
                                 <input type="checkbox" />
                              </td>
                              <td>
                                 {{$data->from_avail}} - {{$data->to_avail}}
                              </td>
                              <td>
                                 <a data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                 </a>
                              </td>
                              <td>
                                 <input type="button" class="btn btn-danger" value="Delete">
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
   $('.jmmao_store').parents('.treeview').addClass('menu-open');
   $('.jmmao_store').parents('.treeview-menu').css({'display':'block'});
   $('.jmmao_store').addClass('active');
   $('input[name="daterange"]').daterangepicker({
   opens: 'left'
   }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
   });
</script>
@endsection

@section('modals')
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">JMMAO Store Details</h3>
         </div>
         <div class="modal-body">
            <form action="/" method="post">
               <div class="form-group">
                  <label for="jmmao_id">ID:</label>
                  <input type="text" class="form-control" value="ID here" id="jmmao_id" readonly="readonly">
               </div>
               <div class="form-group">
                  <label for="jmmao_name">Name:</label>
                  <input type="text" class="form-control" value="Name here" id="jmmao_name" readonly="readonly">
               </div>
               <div class="form-group">
                  <label for="discount">Discount Percentage:</label>
                  <input type="text" class="form-control" id="discount" value="50" readonly="readonly">
               </div>
               <div class="form-group">
                  <label for="v_date">Visible Date:</label>
                  <input type="text" class="form-control" id="v_date" name="daterange" value="01/01/2018 - 01/15/2018" readonly="readonly">
               </div>
               <div class="form-group">
                  <label for="logo">Logo:</label>
                  <input type="text" class="form-control" id="logo" value="https://i.imgur.com/FgWnQCx.jpg" readonly="readonly">
               </div>
               <div class="form-group">
                  <label for="available">Available:</label>
                  <input type="checkbox" id="available" readonly="readonly">
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success add-attr">Save</button>
            <button type="button" class="btn btn-primary remove-attr">Edit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="myModal2" role="dialog">
   <div class="modal-dialog">
      
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Add New Category</h3>
         </div>
         <div class="modal-body">
            <form>
               <div class="form-group">
                  <label for="category_name">Category Name:</label>
                  <input type="text" class="form-control" id="category_name">
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <input type="submit" class="btn btn-success" id="usr"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="showImage" role="dialog">
   <div class="modal-dialog modal-custom">
      <img class="img-responsive img-rounded margin-0-auto" src="assets/bower_components/images/background.jpg" alt="Large Image" data-dismiss="modal">
      <p class="close-msg">click on image to close</p>
   </div>
</div>
@endsection