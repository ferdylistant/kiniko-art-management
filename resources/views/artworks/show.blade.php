@extends('layouts.app')

@section('title', $artwork->title . ' | Kiniko Art Management')
@section('meta_description', Str::limit($artwork->description, 150))

@php use Illuminate\Support\Str; @endphp

@section('content')

    <section class="py-5">
        <div class="container">

            <div class="row g-5 align-items-start">

                <div class="col-lg-6">
                    <figure class="editorial-frame">
                        <img src="https://placehold.co/900x1200?text=Artwork+Image" alt="{{ $artwork->title }}">
                        <figcaption>
                            Artwork documentation (Dummy)
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-6">

                    <p class="small text-uppercase text-muted mb-2" style="letter-spacing:2px;">
                        Artwork
                    </p>

                    <h1 class="display-6">
                        {{ $artwork->title }}
                    </h1>

                    <div class="divider"></div>

                    <ul class="list-unstyled small text-muted mb-4">
                        <li><strong>Artist:</strong> {{ $artwork->artist }}</li>
                        <li><strong>Year:</strong> {{ $artwork->year }}</li>
                        <li><strong>Medium:</strong> {{ $artwork->medium }}</li>
                        <li><strong>Dimension:</strong> {{ $artwork->dimension }}</li>
                    </ul>

                    <p class="text-muted">
                        {{ $artwork->description }}
                    </p>

                    <div class="mt-4">
                        <a href="{{ route('artists.show', 'artist-one') }}" class="classic-link me-4">
                            View Artist →
                        </a>

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
            <a href="{{ route('artworks.index') }}" class="classic-link">
                ← Back to Artworks
            </a>
        </div>
    </section>

@endsection
