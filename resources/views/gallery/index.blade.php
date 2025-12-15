@extends('layouts.app')
@section('title', 'Gallery')


@section('content')
    <div class="container">
        <h2 class="mb-4 fw-serif">Gallery</h2>
        <div class="row g-4">
            @foreach ($galleries as $gallery)
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('storage/' . $gallery->thumbnail) }}" class="card-img-top">
                        <div class="card-body">
                            <h6>{{ $gallery->name }}</h6>
                            <p class="small text-muted">{{ $gallery->location }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
