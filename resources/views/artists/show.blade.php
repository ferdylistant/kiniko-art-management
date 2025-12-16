@extends('layouts.app')

@section('title', $artist->name . ' | Kiniko Art Management')
@section('meta_description', Str::limit($artist->bio, 150))

@php use Illuminate\Support\Str; @endphp

@section('content')

    {{-- ARTIST PROFILE --}}
    <section class="py-5">
        <div class="container">

            <div class="row mb-5 align-items-center">

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <figure class="editorial-frame">
                        <img src="https://placehold.co/600x700?text=Artist+Portrait" alt="{{ $artist->name }} portrait">
                        <figcaption>
                            Artist portrait (Dummy)
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-8">

                    <p class="small text-uppercase text-muted mb-2" style="letter-spacing:2px;">
                        Artist Profile
                    </p>

                    <h1 class="display-5">
                        {{ $artist->name }}
                    </h1>

                    <div class="divider"></div>

                    <p class="lead text-muted">
                        {{ $artist->bio }}
                    </p>

                    <ul class="list-unstyled small text-muted mt-4">
                        <li><strong>Discipline:</strong> {{ $artist->discipline }}</li>
                        <li><strong>Location:</strong> {{ $artist->location }}</li>
                        <li><strong>Status:</strong> {{ $artist->year }}</li>
                    </ul>

                </div>

            </div>

        </div>
    </section>

    {{-- RELATED EXHIBITIONS (DUMMY) --}}
    <section class="py-5 bg-white">
        <div class="container">

            <h2 class="fw-serif text-center mb-4">
                Related Exhibitions
            </h2>
            <div class="divider"></div>

            <div class="row g-4 justify-content-center">

                <div class="col-md-4">
                    <div class="art-card p-4 text-center">
                        <h5>Untitled Exhibition</h5>
                        <p class="small text-muted mb-3">
                            Upcoming, 2025
                        </p>
                        <a href="{{ route('exhibitions.show', 'untitled-exhibition') }}" class="classic-link">
                            View Exhibition →
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- BACK CTA --}}
    <section class="py-5">
        <div class="container text-center">
            <a href="{{ route('artists.index') }}" class="classic-link">
                ← Back to Artists
            </a>
        </div>
    </section>

@endsection
