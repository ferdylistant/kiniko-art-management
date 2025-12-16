@extends('layouts.app')

@section('title', $exhibition->title . ' | Kiniko Art Management')
@php use Illuminate\Support\Str; @endphp
@section('meta_description', Str::limit($exhibition->description, 150))

@section('content')

    <section class="py-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-8">

                    <p class="small text-uppercase text-muted mb-2" style="letter-spacing:2px;">
                        Curated Exhibition
                    </p>

                    <h1 class="display-4">
                        {{ $exhibition->title }}
                    </h1>

                    <div class="divider"></div>

                    <p class="lead text-muted">
                        {{ $exhibition->description }}
                    </p>

                </div>

                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <ul class="list-unstyled small text-muted">
                        <li><strong>Period:</strong> {{ $exhibition->period }}</li>
                        <li><strong>Venue:</strong> {{ $exhibition->venue }}</li>
                        <li><strong>Type:</strong> {{ $exhibition->type }}</li>
                    </ul>
                </div>
            </div>

            <figure class="editorial-frame mb-5">
                <img src="https://placehold.co/1200x700?text=Exhibition+Documentation"
                    alt="{{ $exhibition->title }} documentation">
                <figcaption>
                    Exhibition documentation (Dummy)
                </figcaption>
            </figure>

        </div>
    </section>

@endsection
