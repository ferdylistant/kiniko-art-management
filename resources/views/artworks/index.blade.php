@extends('layouts.app')

@section('title', 'Artworks | Kiniko Art Management')
@section('meta_description', 'Selected artworks presented within exhibitions and artist programs by Kiniko Art
    Management.')

@section('content')

    <section class="py-5">
        <div class="container">

            <header class="text-center mb-5">
                <h1 class="fw-serif">Artworks</h1>
                <div class="divider"></div>
                <p class="text-muted small">
                    Selected works documented within Kiniko Art Management’s
                    exhibition and artist programs.
                </p>
            </header>

            <div class="row g-4">

                @foreach ($artworks as $artwork)
                    <div class="col-md-6 col-lg-3">
                        <article class="art-card h-100">

                            <img src="https://placehold.co/600x800?text=Artwork" class="img-fluid"
                                alt="{{ $artwork->title }}">

                            <div class="p-3">
                                <h6 class="mb-1">
                                    {{ $artwork->title }}
                                </h6>

                                <p class="small text-muted mb-2">
                                    {{ $artwork->artist }}<br>
                                    {{ $artwork->year }}
                                </p>

                                <a href="{{ route('artworks.show', $artwork->slug) }}" class="classic-link small">
                                    View Artwork →
                                </a>
                            </div>

                        </article>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

@endsection
