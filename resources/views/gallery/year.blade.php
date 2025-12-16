@extends('layouts.app')

@section('title', 'Gallery Archive ' . $year . ' | Kiniko Art Management')
@section('meta_description', 'Exhibitions presented by Kiniko Gallery during ' . $year . '.')

@section('content')

    <section class="py-5">
        <div class="container">

            <header class="mb-5">
                <h1 class="fw-serif">
                    Gallery Program — {{ $year }}
                </h1>
                <div class="divider"></div>
                <p class="text-muted small">
                    Exhibition program presented by Kiniko Gallery
                    during the year {{ $year }}.
                </p>
            </header>

            <div class="row g-4">

                @foreach ($exhibitions as $exhibition)
                    <div class="col-md-6 col-lg-4">
                        <article class="art-card h-100 p-4">

                            <h4 class="mb-2">
                                {{ $exhibition->title }}
                            </h4>

                            <p class="small text-muted mb-3">
                                {{ $exhibition->period }}
                            </p>

                            <a href="{{ route('exhibitions.show', $exhibition->slug) }}" class="classic-link">
                                View Exhibition →
                            </a>

                        </article>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    {{-- BACK --}}
    <section class="py-5">
        <div class="container text-center">
            <a href="{{ route('gallery.index') }}" class="classic-link">
                ← Back to Gallery
            </a>
        </div>
    </section>

@endsection
