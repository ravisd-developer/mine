@extends('.front')

@section('content')
<div class="container">
    <div class="first-show">
        <div class="name-section">
            <p class="name" id="name">
                <!--    <span class="ravi">Ravi</span> SD </p> -->
        </div>
    </div>
    <?php 
   foreach ($errors->all() as $message) {
      echo $message ; 
    }

    ?>
@if (session('error'))
<div class="alert alert-success">
    {{ session('error') }}
</div>
@endif
    <!--  <h1> Welcome To Clients Session</h1>
    <p>Now you can Track your Employees</p> -->
    <div class="col">
        <div class="col-md-6 offset-md-3">
            <div class="login">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Register</a>
                    </li>
                </ul>

            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form class="text-center border border-light p-5" action="{{url('/home')}}" method="post">
                        @csrf
                        <input  name="email" type="email" class="form-control mb-4" placeholder="E-mail">
                        <input name="password" type="password" class="form-control mb-4" placeholder="Password">
                        <button class="btn btn-info btn-block my-4" type="submit" id="loginButton">Login</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  
                    <form class="text-center border border-light p-5" action="" id="registerForm">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Company name">
                        <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <input type="text" name="mobile" class="form-control" placeholder="Phone number">
                        <button class="btn btn-info my-4 btn-block" type="button" id="registerButton">Sign in</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection
