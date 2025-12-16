@extends('layouts.app')

@section('title', 'Exhibitions | Kiniko Art Management')
@section('meta_description', 'Archive of exhibitions curated and presented by Kiniko Art Management.')
@push('styles')
    <style>
        .exhibition-index-title {
            font-size: clamp(2.4rem, 4vw, 3.4rem);
            letter-spacing: .5px;
            margin-bottom: .5rem;
        }

        .exhibition-meta {
            font-family: 'Source Sans 3', sans-serif;
            font-size: 0.7rem;
            letter-spacing: 1.5px;
            color: var(--kiniko-gray);
        }

        .exhibition-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            line-height: 1.35;
            font-weight: 500;
        }

        .exhibition-caption {
            font-family: 'Source Sans 3', sans-serif;
            font-size: 0.75rem;
            letter-spacing: 1px;
            line-height: 1.6;
            color: var(--kiniko-gray);
        }

        .exhibition-list .art-card {
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .exhibition-title {
                font-size: 1.25rem;
            }
        }
    </style>
@endpush
@section('content')

    {{-- EXHIBITION INDEX --}}
    <section class="py-5">
        <div class="container">

            <header class="text-center mb-5">
                <h1 class="exhibition-index-title">Exhibitions</h1>

                <div class="divider"></div>
                <p class="text-muted small">
                    An archive of curated exhibitions presented by
                    Kiniko Art Management.
                </p>
            </header>

            <div class="row g-4 justify-content-center">

                @foreach ($exhibitions as $exhibition)
                    <div class="col-md-6 col-lg-4">
                        <article class="art-card h-100 p-4 d-flex flex-column">

                            <p class="exhibition-meta mb-2">
                                Exhibition
                            </p>


                            <h3 class="exhibition-title mb-2">

                                {{ $exhibition->title }}
                            </h3>

                            <p class="exhibition-caption mb-4">

                                {{ $exhibition->period }}<br>
                                {{ $exhibition->venue }}
                            </p>

                            <div class="mt-auto">
                                <a href="{{ route('exhibitions.show', $exhibition->slug) }}" class="classic-link">
                                    View Exhibition →
                                </a>
                            </div>

                        </article>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

@endsection
