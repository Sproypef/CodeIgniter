@extends('layouts.main_dashboard')

@section('page_heading','Boxed Layout')
@section('page_heading_small','Blank example to the boxed layout')

@section('breadcrumb_dashboard','Home')
@section('breadcrumb_active','Dashboard')

@section('body_class','hold-transition skin-blue layout-boxed sidebar-mini')

@section('content')
  <div class="callout callout-info">
    <h4>Tip!</h4>

    <p>Add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when working on
      large screens because it prevents the site from stretching very wide.</p>
  </div>
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Title</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      Start creating your amazing application!
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
@stop
