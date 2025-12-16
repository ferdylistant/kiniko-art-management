@extends('layouts.app')

@section('title', 'Gallery Archive | Kiniko Art Management')
@section('meta_description', 'Archive of exhibitions presented by Kiniko Gallery, organized by year.')

@section('content')

    <section class="py-5">
        <div class="container">

            <header class="text-center mb-5">
                <h1 class="fw-serif">Gallery Archive</h1>
                <div class="divider"></div>
                <p class="text-muted small">
                    An archival overview of Kiniko Gallery’s
                    exhibition program by year.
                </p>
            </header>

            <div class="row justify-content-center g-4">

                @foreach ($years as $item)
                    <div class="col-md-4 col-lg-3 text-center">
                        <div class="art-card p-4">

                            <h2 class="fw-serif mb-2">
                                {{ $item->year }}
                            </h2>

                            <p class="small text-muted mb-3">
                                {{ $item->count }} Exhibitions
                            </p>

                            <a href="{{ route('gallery.archive.year', $item->year) }}" class="classic-link">
                                View Archive →
                            </a>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

@endsection
