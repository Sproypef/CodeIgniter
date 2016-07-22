<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    @yield('page_heading')
    <small>@yield('page_heading_small')</small>
  </h1>
  <ol class="breadcrumb">
    @if(isset($breadcrumb) && sizeof($breadcrumb) > 0)
        @foreach($breadcrumb as $key => $value)
          @if($key != (sizeof($breadcrumb) -1 ))
            <li><a href="{{$value['href'] != '' ? $value['href'] : '#'}}"><i class="fa fa-dashboard"></i> {{$value['name']}}</a></li>
          @else
            <li class="active">{{$value['name']}}</li>
          @endif
        @endforeach
    @endif
  </ol>
</section>
