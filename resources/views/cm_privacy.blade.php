@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1 class="title">
      Privacy Policy
      <!-- <small>Privacy Policy</small> -->
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Content Management</a></li>
      <li class="active">Privacy Policy</li>
   </ol>
</section>
<div class="page-wrapper padding25">
   <!-- Main content -->
   <div class="container-fluid">
      <form action="/" method="post" enctype="multipart/form-data">
         <textarea class="ckeditor" name="editor"></textarea>
      </form>
      <div class="text-center padding20">
         <button type="button" class="btn btn-success">Save</button>
      </div>
   </div>
   <!-- /.content -->
</div>
@endsection

@section('javascript')
<script src="assets/bower_components/js/ckeditor/ckeditor.js"></script>
<script>
   $('.cm_privacy').parents('.treeview').addClass('menu-open');
   $('.cm_privacy').parents('.treeview-menu').css({'display':'block'});
   $('.cm_privacy').addClass('active');
   $('.content_management').addClass('active');
</script>
@endsection
