@extends('layouts.app')

@section('title', 'Artists | Kiniko Art Management')
@section('meta_description', 'Artists represented and presented by Kiniko Art Management.')

@section('content')

    <section class="py-5">
        <div class="container">

            <header class="text-center mb-5">
                <h1 class="fw-serif">Artists</h1>
                <div class="divider"></div>
                <p class="text-muted small">
                    Artists represented and presented within
                    Kiniko Art Management’s program.
                </p>
            </header>

            <div class="row g-4 justify-content-center">

                @foreach ($artists as $artist)
                    <div class="col-md-6 col-lg-4">
                        <article class="art-card h-100 p-4 text-center">

                            <img src="https://placehold.co/400x400?text=Artist+Portrait" class="img-fluid mb-3"
                                alt="{{ $artist->name }} portrait">

                            <h4 class="mb-1">
                                {{ $artist->name }}
                            </h4>

                            <p class="small text-muted mb-3">
                                {{ $artist->discipline }}<br>
                                {{ $artist->location }}
                            </p>

                            <a href="{{ route('artists.show', Str::slug($artist->name)) }}" class="classic-link">
                                View Profile →
                            </a>

                        </article>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

@endsection
