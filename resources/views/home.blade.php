@extends('layouts.app')
@section('title', 'Kiniko Art Management')


@section('content')
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-serif">Kiniko Art Management</h1>
            <p class="lead text-muted">Where Art Meets Legacy</p>
        </div>


        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h5>Gallery</h5>
                        <p class="small text-muted">Museum-level curated art collections</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h5>Exhibition</h5>
                        <p class="small text-muted">Professional exhibitions & showcases</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h5>Artist Management</h5>
                        <p class="small text-muted">Supporting artistic legacy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
