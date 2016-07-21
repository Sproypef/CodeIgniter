@extends('layouts.plane')
@section('body')
<div class="wrapper">
  @include('layouts.main_header')
  @include('layouts.main_sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('page_heading')
        <small>@yield('page_heading_small')</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> @yield('breadcrumb_dashboard')</a></li>
        <li class="active">@yield('breadcrumb_active')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('boxes')

      <!-- Main row -->
      <div class="row">

				@yield('section')

      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.main_footer')
  @include('layouts.control_sidebar')
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@stop
