@extends('layouts.app')
@section('content')

    <div class="card">
        @foreach ($data as $dt)
            <div class="card-body">
                <h4 class="card-title">{{ $dt->title}}</h4>
                <p class="card-text">{{ $dt->body }}</p><a
                    </a>
            </div>
        @endforeach

    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
@endsection
