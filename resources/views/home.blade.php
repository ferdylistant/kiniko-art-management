@extends('layouts.app')

@section('title', 'Kiniko Art Management — Contemporary Art, Exhibition & Artist Representation')

@section('meta_description',
    'Kiniko Art Management is a contemporary art management platform that presents exhibitions,
    artists, and institution-based curatorial narratives.')
    @push('styles')
        <style>
            .featured-exhibition.fallback {
                background: linear-gradient(135deg, #111, #222);
                min-height: 300px;
                display: flex;
                align-items: center;
            }
        </style>
    @endpush
@section('content')

    {{-- HERO EDITORIAL --}}
    <section class="hero-editorial">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <span class="hero-label">Art Management & Exhibition Platform</span>

                    <h1 class="hero-title mt-3">
                        Kiniko Art<br>
                        <span class="text-muted">Management</span>
                    </h1>
                    <div class="divider"></div>



                    <p class="lead text-muted mt-4">
                        Kiniko Art Management is dedicated to the development,
                        presentation, and contextualization of contemporary
                        artistic practices through exhibitions and artist
                        representation.
                    </p>
                </div>

                <div class="col-lg-6">
                    <figure class="editorial-frame">
                        <img src="{{ asset('img/hero.jpeg') }}" class="img-fluid" alt="Exhibition Installation View">
                        <figcaption>
                            Installation view — Kiniko Exhibition Program (Dummy)
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </section>
    {{-- CURRENT / FEATURED EXHIBITION --}}
    @if ($currentExhibition)
        <section class="featured-exhibition"
            style="--bg-image: url('{{ asset('storage/' . $currentExhibition->banner) }}');">

            <div class="overlay"></div>

            <div class="container position-relative">

                <div class="text-center mb-5 text-light">
                    <h2 class="fw-serif">Featured Exhibition</h2>
                    <div class="divider divider-light"></div>
                    <p class="small opacity-75">
                        Selected exhibition presented by Kiniko Art Management
                    </p>
                </div>

                <div class="row justify-content-center mb-5">
                    <div class="col-lg-10">

                        <article class="art-card art-card-overlay p-4 p-md-5">

                            <div class="row g-5 align-items-center">

                                <div class="col-md-6">
                                    <figure class="m-0">
                                        <img src="{{ asset('storage/' . $currentExhibition->banner) }}" class="img-fluid"
                                            alt="Featured Exhibition Installation View">
                                        <figcaption class="small text-muted mt-2">
                                            Installation view — Kiniko Exhibition Program
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="col-md-6">

                                    <p class="exhibition-meta mb-2">
                                        Current Exhibition
                                    </p>

                                    <h2 class="exhibition-title mb-2">
                                        {{ $currentExhibition->title }}
                                    </h2>

                                    <p class="exhibition-caption mb-4">
                                        {{ $currentExhibition->formatted_period }}
                                        <br>
                                        {{ $currentExhibition->venue }}
                                    </p>

                                    <p class="text-muted">
                                        {{ Str::limit(strip_tags($currentExhibition->description), 200) }}

                                    </p>

                                    <a href="{{ route('exhibitions.show', $currentExhibition->slug) }}"
                                        class="classic-link">
                                        View Exhibition →
                                    </a>

                                </div>

                            </div>

                        </article>

                    </div>
                </div>

            </div>
        </section>
    @else
        {{-- NO CURRENT EXHIBITION --}}
        <section class="featured-exhibition fallback">
            <div class="container py-5 text-center text-light">
                <h2 class="fw-serif">No Current Exhibition</h2>
                <div class="divider divider-light"></div>
                <p class="opacity-75">
                    There is no active exhibition at the moment.<br>
                    Upcoming programs will be announced soon.
                </p>
            </div>
        </section>
    @endif

    {{-- EXHIBITION ARCHIVE --}}
    @if ($exhibitions->isNotEmpty())
        <section class="py-5">
            <div class="container">

                <header class="text-center mb-5">
                    <h2 class="fw-serif">Exhibition Archive</h2>
                    <div class="divider"></div>
                    <p class="text-muted small">
                        A chronological archive of past exhibitions curated
                        and presented by Kiniko Art Management.
                    </p>
                </header>

                <div class="row justify-content-center">

                    <div class="col-lg-9">

                        <ul class="list-unstyled exhibition-list">

                            @foreach ($exhibitions as $exhibition)
                                <li class="py-4 border-bottom">

                                    <div class="row align-items-center">

                                        <div class="col-md-8">

                                            <h4 class="mb-1">
                                                {{ $exhibition->title }}
                                            </h4>

                                            <p class="text-muted small mb-0">
                                                {{ $exhibition->period }}
                                                @if (!empty($exhibition->venue))
                                                    — {{ $exhibition->venue }}
                                                @endif
                                            </p>

                                        </div>

                                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                            <a href="{{ route('exhibitions.show', $exhibition->slug) }}"
                                                class="classic-link">
                                                View →
                                            </a>
                                        </div>

                                    </div>

                                </li>
                            @endforeach

                        </ul>

                    </div>

                </div>

            </div>
        </section>
    @endif
    {{-- CORE PILLARS --}}
    <section class="py-5 bg-white">
        <div class="container">
            <header class="text-center mb-5">
                <h2 class="fw-serif">Core Pillars</h2>
                <div class="divider"></div>
                <p class="text-muted small">
                    Kiniko Art Management’s core pillars of operation.
                </p>
            </header>
            <div class="row g-4 text-center">

                <div class="col-md-4">
                    <div class="art-card h-100 p-4">
                        <h4>Gallery</h4>
                        <p class="text-uppercase small text-muted mb-2" style="letter-spacing:2px;">
                            Exhibition Space
                        </p>
                        <p class="text-muted small">
                            Dedicated gallery spaces designed to contextualize
                            contemporary artworks within institutional settings.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="art-card h-100 p-4">
                        <h4>Exhibition</h4>
                        <p class="text-uppercase small text-muted mb-2" style="letter-spacing:2px;">
                            Curatorial Program
                        </p>
                        <p class="text-muted small">
                            Professionally structured exhibitions that articulate
                            artistic ideas, movements, and socio-cultural discourse.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="art-card h-100 p-4">
                        <h4>Artist</h4>
                        <p class="text-uppercase small text-muted mb-2" style="letter-spacing:2px;">
                            Representation
                        </p>
                        <p class="text-muted small">
                            Long-term artist representation focusing on development,
                            visibility, and archival legacy.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- PHILOSOPHY --}}
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">

                    <blockquote class="fs-5 fst-italic text-muted">
                        “Art is not merely displayed — it is contextualized,
                        archived, and allowed to speak within its time.”
                    </blockquote>

                    <div class="divider"></div>

                </div>
            </div>
            <div class="text-center">
                <p class="small  text-muted mb-2" style="letter-spacing:2px;">
                    Archive & Documentation
                </p>
                <a href="{{ route('gallery.index') }}" class="classic-link">
                    Visit Gallery →
                </a>
            </div>
        </div>
    </section>


@endsection
