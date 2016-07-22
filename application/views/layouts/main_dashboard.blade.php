@extends('layouts.main_plane')

@section('main_styles')
  @parent
  @yield('custom_styles')
@stop

@section('body')

  <div class="wrapper">

    @include('layouts.main_header')

    @include('layouts.sidebars.main_sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      @include('layouts.content_header')

      <!-- Main content -->
      <section class="content">

        @section('content')

          @yield('content_boxes')

          <!-- Main row -->
          <div class="row">

    				@yield('content_main_row')

          </div>
          <!-- /.row (main row) -->

        @show

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('layouts.main_footer')
    @include('layouts.sidebars.sidebar_control')

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

@stop

@section('main_scripts')
  @yield('custom_scripts_above')
  @parent
  @yield('custom_scripts_below')
@stop
