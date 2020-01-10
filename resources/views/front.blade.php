<html>

<head>
    <title>RAVISD - @yield('title')</title>
    <link href={{ asset("public/bootstrap/css/bootstrap.css") }} rel="stylesheet" />
    <link href={{ asset("public/bootstrap/css/bootstrap.min.css") }} rel="stylesheet" />
    <link href={{ asset("public/bootstrap/css/mdb.min.css") }} rel="stylesheet" />
    <link href={{ asset("public/bootstrap/css/style.css") }} rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>

<body>

    <div class="main">
        <div class="sidebarnav">
            <ul class="nav tabs-orange">
                <li class="nav-item">
                    <a class="nav-link  waves-light " href="{{ url('/')}}"><br>RAVI SD</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  waves-light " href=" {{  url('/about') }}"><br>About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  waves-light " href=" {{  url('/projects') }}"><br>MY Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  waves-light " href=" {{  url('/clients') }}"><br>Clients</a>
                </li>
               
            </ul>
        </div>
        <div class="content">
            @yield('content')
            

        </div>
    </div>


    <script src="{{ asset("public/bootstrap/js/jquery.min.js") }}"></script>
    <script src="{{ asset("public/bootstrap/js/bootstrap.js") }}"></script>
    <script src="{{ asset("public/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("public/bootstrap/js/popper.min.js") }}"></script>
    <script src="{{ asset("public/bootstrap/js/mdb.min.js") }}"></script>
    <script src="{{ asset("public/bootstrap/js/custom.js") }}"></script>
    <script src="{{ asset("public/bootstrap/js/ajaxcall.js") }}"></script>
    <script src="{{ asset("public/bootstrap/js/sweetalert.js") }}"></script>
    <script src="{{ asset("public/bootstrap/js/toast.js") }}"></script>
   
  
</body>

</html>
