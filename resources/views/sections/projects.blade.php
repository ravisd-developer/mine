@extends('/front')
@section('title', 'Projects')
    
@section('content')
<div class="container">
    <div class="first-show">
        <div class="name-section">
            <p class="name" id="name">
                <span class="ravi">Ravi</span> SD </p>
        </div>
    </div>
{{-- <h2>Projects  {{ $name[0]->id}}</h2>    --}}
<div class="col">
    <div class="row">
        <div class="col">
            <div class="inner-pro">
                <h5>URL SHORTENER</h5>
                <ul class="pro-ul">
                    <li>URL SHORTENER is a free tool to shorten a URL or reduce a link.</li>
                    <li>Simple and fast URL shortener!</li>
                    <li>Easy To use</li>
                    <li>easier to share</li>
                </ul>
                <a href="{{ url('/url')}}" class="project-btn"> Get your url </a>
            </div>
        </div>
        <div class="col">
            <div class="inner-pro">
                <h5>NOTES SAVER</h5>
                <ul class="pro-ul">
                    <li>You can save Your daily notes</li>
                    <li>Free tool To use</li>
                    <li>Easy To use</li>
                    <li>Save on daily bases</li>
                    <li>Easy Edit options</li>
                </ul>
                <a href="{{ url('/')}}" class="project-btn"> Save your notes </a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection