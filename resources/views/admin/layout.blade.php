<!DOCTYPE html>
<html>
  <head>

    <title>Ruberoo - @yield('title')</title>
    @include('master.head')

  </head>
  <body class="fixed-header dashboard">
    <!-- Site wrapper -->
      @include('master.sidebar')
      

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <div class="page-container ">
        @include('master.header')

        <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
          <div class="content sm-gutter">
            @yield('content')
          </div>

        </div>

      </div>
      <!-- =============================================== -->
      @include('master.quickview')

    <!-- ./wrapper -->
    @include('master.footer')

  </body>
</html>