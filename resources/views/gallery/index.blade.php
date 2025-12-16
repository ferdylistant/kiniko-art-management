@extends('layouts.app')

@section('title', 'Gallery | Kiniko Art Management')
@section('meta_description',
    'Gallery archive presenting exhibitions, artworks, and institutional photographs curated by
    Kiniko Art Management.')
    @push('styles')
        <style>
            .gallery-filter a {
                margin: 0 1rem;
                font-family: 'Playfair Display', serif;
                letter-spacing: 1px;
                text-decoration: none;
                color: var(--kiniko-gray);
                position: relative;
            }

            .gallery-filter a.active,
            .gallery-filter a:hover {
                color: var(--kiniko-dark);
            }

            .gallery-filter a::after {
                content: '';
                position: absolute;
                left: 0;
                bottom: -6px;
                width: 0;
                height: 1px;
                background: var(--kiniko-red);
                transition: width .3s ease;
            }

            .gallery-filter a.active::after,
            .gallery-filter a:hover::after {
                width: 100%;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const filterLinks = document.querySelectorAll('.gallery-filter a');
                const items = document.querySelectorAll('.gallery-item');

                if (!filterLinks.length || !items.length) return;

                filterLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();

                        const type = this.dataset.filter;

                        // active state
                        filterLinks.forEach(l => l.classList.remove('active'));
                        this.classList.add('active');

                        items.forEach(item => {
                            if (type === 'all' || item.dataset.type === type) {
                                item.style.display = '';
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    });
                });

            });
        </script>
    @endpush

@section('content')

    <section class="py-5">
        <div class="container">

            {{-- HEADER --}}
            <header class="text-center mb-4">
                <h1 class="fw-serif">Gallery</h1>
                <div class="divider"></div>
                <p class="text-muted small">
                    A visual archive of exhibitions, artworks,
                    and institutional documentation.
                </p>
            </header>

            {{-- FILTER BAR --}}
            <div class="d-flex justify-content-center mb-5">
                <nav class="gallery-filter">
                    <a href="#" class="active" data-filter="all">All</a>
                    <a href="#" data-filter="exhibition">Exhibitions</a>
                    <a href="#" data-filter="artwork">Artworks</a>
                    <a href="#" data-filter="photo">Photos</a>
                </nav>
            </div>

            <div class="row">

                {{-- MAIN GALLERY GRID --}}
                <div class="col-lg-9">
                    <div class="row g-4">

                        @foreach ($galleries as $gallery)
                            <div class="col-md-6 col-xl-4 gallery-item" data-type="{{ $gallery->type }}">

                                <article class="art-card h-100">

                                    @php
                                        $url = match ($gallery->type) {
                                            'exhibition' => route('exhibitions.show', $gallery->slug),
                                            'artwork' => route('artworks.show', $gallery->slug),
                                            default => null,
                                        };
                                    @endphp

                                    @if ($url)
                                        <a href="{{ $url }}" class="text-decoration-none text-dark">
                                    @endif

                                    <figure class="m-0">
                                        <img src="{{ $gallery->image }}" class="img-fluid" alt="{{ $gallery->title }}">

                                        <figcaption class="p-3">
                                            <p class="small text-uppercase text-muted mb-1" style="letter-spacing:2px;">
                                                {{ ucfirst($gallery->type) }}
                                            </p>

                                            <h5 class="mb-1">
                                                {{ $gallery->title }}
                                            </h5>

                                            <p class="small text-muted mb-0">
                                                {{ $gallery->year }}
                                            </p>
                                        </figcaption>
                                    </figure>

                                    @if ($url)
                                        </a>
                                    @endif

                                </article>
                            </div>
                        @endforeach

                    </div>
                </div>

                {{-- ARCHIVE SIDEBAR --}}
                <aside class="col-lg-3 mt-5 mt-lg-0">
                    <div class="art-card p-4 sticky-top" style="top:100px;">

                        <h5 class="fw-serif mb-3">Archive</h5>

                        <ul class="list-unstyled mb-0">
                            @foreach ($years as $item)
                                <li class="mb-2">
                                    <a href="{{ route('gallery.archive.year', $item->year) }}"
                                        class="text-decoration-none d-flex justify-content-between">

                                        <span>{{ $item->year }}</span>
                                        <span class="text-muted small">
                                            {{ $item->count }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </aside>

            </div>

        </div>
    </section>

@endsection
