@extends('layouts/app')
@section('content')
    @foreach ($post as $tin)
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $tin->tieude }}</h5>
                <p class="card-text">{{ $tin->tomtat }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <br>
    @endforeach
@endsection
