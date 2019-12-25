@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1 class="title">
      Categories Management
      <!-- <small>Categories</small> -->
   </h1>
   <ol class="breadcrumb">
      <li>
         <i class="fa fa-dashboard"></i>
         Categories Management
      </li>
      <!-- <li class="Categories">Categories</li> -->
   </ol>
</section>
<div class="page-wrapper padding25">
   <div class="row page-titles">
      <div class="col-md-10 align-self-center">
         <!-- <h3 class="text-primary">Event Management - Categories</h3> -->
      </div>
      <div class="col-md-2 text-right">
         <input type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" value="Add">
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
                              <th>Category ID</th>
                              <th>Category Name</th>
                              <th>Is Available</th>
                              <th>Edit</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($cm as $key => $data)
                              <tr>    
                                 <td>{{$data->category_id}}</td>
                                 <td>{{$data->category_name}}</td>
                                 <td><input type="checkbox" value=""></td>
                                 <td><input type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" value="Edit"></td>
                                 <td><input type="button" class="btn btn-danger" value="Delete"></td>
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
   $('.categories_management').parents('.treeview').addClass('menu-open');
   $('.categories_management').parents('.treeview-menu').css({'display':'block'});
   $('.categories_management').addClass('active');
   $('.user_management').removeClass('active');
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
            <h3 class="modal-title">Add New Category</h3>
         </div>
         <div class="modal-body">
            <form action="/" method="post">
               <div class="form-group">
                  <label for="usr">Category Name:</label>
                  <input type="text" class="form-control" id="usr">
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <input type="submit" class="btn btn-success" id="usr"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal For Edit Button -->
<div class="modal fade" id="myModal2" role="dialog">
   <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Edit Category</h3>
         </div>
         <div class="modal-body">
            <form action="/" method="post">
               <div class="form-group">
                  <label for="category_id">Category ID:</label>
                  <input type="text" class="form-control" id="category_id">
               </div>
               <div class="form-group">
                  <label for="category_name">Category Name:</label>
                  <input type="text" class="form-control" id="category_name">
               </div>
               <div class="form-group">
                  <label for="available">Is Available:</label>
                  <input type="checkbox" id="available">
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <input type="submit" class="btn btn-success" id="usr" value="Update" data-dismiss="modal"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
@endsection