@extends('layouts.app')

@section('title', 'About | Kiniko Art Management')
@section('meta_description',
    'About Kiniko Art Management, an art management platform dedicated to exhibitions, artists,
    and institutional narratives.')

    @push('styles')
        <style>
            .text-justify {
                text-align: justify;
                text-justify: inter-word;
                hyphens: auto;
            }
        </style>
    @endpush
    @push('scripts')
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "@id": "{{ url('/about') }}#{{ Str::slug($founder->name) }}",
  "name": "{{ $founder->name }}",
  "image": "{{ asset($founder->photo) }}",
  "birthDate": "{{ $founder->birth_date }}",
  "birthPlace": {
    "@type": "Place",
    "name": "{{ $founder->birth_place }}"
  },
  "jobTitle": "{{ $founder->title }}",
  "affiliation": {
    "@type": "Organization",
    "@id": "{{ url('/') }}#organization"
  },
  "description": "{{ $founder->bio }}"
}
</script>
    @endpush


@section('content')

    {{-- ABOUT KINIKO --}}
    <section class="py-5">
        <div class="container">

            <header class="text-center mb-5">
                <h1 class="fw-serif">{{ $about->title }}</h1>
                <div class="divider"></div>
                <p class="text-muted small">{{ $about->description }}</p>
            </header>

            <div class="col-md-12 text-justify">
                {!! $about->content !!}
            </div>

        </div>
    </section>

    {{-- VISION & MISSION --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="row justify-content-center text-center g-5">

                {{-- VISION --}}
                @if ($visions->count())
                    <div class="col-md-5">
                        <h3 class="fw-serif mb-3">Vision</h3>
                        <div class="divider"></div>
                        @foreach ($visions as $vision)
                            <p class="text-muted">{{ $vision->description }}</p>
                        @endforeach
                    </div>
                @endif

                {{-- MISSION --}}
                @if ($missions->count())
                    <div class="col-md-5">
                        <h3 class="fw-serif mb-3">Mission</h3>
                        <div class="divider"></div>
                        @foreach ($missions as $mission)
                            <p class="text-muted">{{ $mission->description }}</p>
                        @endforeach
                    </div>
                @endif

            </div>

        </div>
    </section>

    {{-- FOUNDER --}}
    <section class="py-5">
        <div class="container">

            <header class="text-center mb-5">
                <h2 class="fw-serif">Founder</h2>
                <div class="divider"></div>
            </header>

            <div class="row">

                {{-- FOUNDER IMAGE --}}
                <div class="col-md-4 text-center">
                    <figure class="art-card">
                        <img src="{{ asset('img/founder.jpeg') }}" alt="{{ $founder->name }} – {{ $founder->title }}"
                            class="img-fluid">
                        <figcaption class="small text-muted mt-3">
                            Portrait of {{ $founder->name }}
                        </figcaption>
                    </figure>
                </div>

                {{-- FOUNDER BIO --}}
                <div class="col-md-8 text-justify">

                    <h3 class="mb-1">{{ $founder->name }}</h3>
                    <p class="small text-uppercase text-muted mb-4" style="letter-spacing:2px;">{{ $founder->title }}</p>
                    {!! $founder->bio !!}

                </div>

            </div>

        </div>
    </section>
    {{-- PHILOSOPHY --}}
    {{-- @if ($quote)
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <blockquote class="fs-5 fst-italic text-muted">
                    {{ $quote->content }}
                </blockquote>
            </div>
        </div>
    </div>
</section>
@endif --}}
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">

                    <blockquote class="fs-5 fst-italic text-muted">
                        “Art is not only exhibited — it is narrated, archived,
                        and positioned within its time.”
                    </blockquote>

                </div>
            </div>
        </div>
    </section>

@endsection
