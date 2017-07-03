<!DOCTYPE html>
<html>
    <head>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="/assets/css/cover.css" rel="stylesheet">
        <title>Sistem Pakar</title>
    </head>
    <body>
        <div class="site-wrapper">

          <div class="site-wrapper-inner">

            <div class="cover-container">

              <div class="masthead clearfix">
                <div class="inner">
                  <!-- <h3 class="masthead-brand">Cover</h3> -->
                  <nav>
                    <ul class="nav masthead-nav">
                      @if (url()->current() == url('/'))
                          <li class="active"><a href="{{ url('/') }}" style="color: #34b0fc;">Home</a></li>
                          <li><a href="{{ url('/diagnosa/Q001') }}">Diagnosa</a></li>
                          <li><a href="{{ url('/about') }}">About</a></li>
                      @elseif (url()->current() == url('/about'))
                          <li><a href="{{ url('/') }}">Home</a></li>
                          <li><a href="{{ url('/diagnosa/Q001') }}">Diagnosa</a></li>
                          <li class="active"><a href="{{ url('/about') }}" style="color: #34b0fc;">About</a></li>
                      @else
                          <li><a href="{{ url('/') }}">Home</a></li>
                          <li class="active"><a href="{{ url('/diagnosa/Q001') }}" style="color: #34b0fc;">Diagnosa</a></li>
                          <li><a href="{{ url('/about') }}">About</a></li>
                      @endif
                    </ul>
                  </nav>
                </div>
              </div>

              @yield('content')

              <div class="mastfoot">
                  <div class="inner">
                      <p style="color: black;">&copy; Cover template for Bootstrap, By @mdo</p>
                  </div>
              </div>

            </div>

          </div>

        </div>

    </body>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</html>
