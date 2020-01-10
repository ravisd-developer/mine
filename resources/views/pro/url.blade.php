@extends('/front')
@section('title','About')

@section('content')
<div class="container">
    <div class="first-show">
        <div class="name-section">
            <p class="name" id="name">
                <span class="ravi">Ravi</span> SD </p>
        </div>
    </div>

    <h1> Welcome To url Shortener</h1>
    <p>You can make your URL Shorten Here</p>
    <div class="col">
        <div class="col">
            <form method="POST" id="insert-url">
                @csrf
                <input class="form-control" type="text" name="url" id="url" placeholder="Paste your Url here" required>
                <input class="btn btn-outline-default  waves-effect" type="submit" value="Submit" id="urlsubmit">
            </form>
        </div>
        <div class="col">
            <div class="user-url">
                    
            </div>
        </div>
    </div>
</div>


@endsection
