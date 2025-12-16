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
  "@id": "{{ url('/about') }}#jefri-caniago",
  "name": "Jefri Caniago",
  "image": "{{ asset('img/founder.jpeg') }}",
  "birthDate": "1988-09-22",
  "birthPlace": {
    "@type": "Place",
    "name": "Solo, Indonesia"
  },
  "jobTitle": "Founder & Art Director",
  "affiliation": {
    "@type": "Organization",
    "@id": "{{ url('/') }}#organization"
  },
  "description": "Gallerist of Minangkabau descent and founder of Kiniko Art Management."
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

            <div class="row justify-content-center">
                <div class="col-lg-9 text-justify">
                    {!! nl2br(e($about->content)) !!}
                </div>
            </div>

        </div>
    </section>

    {{-- VISION & MISSION --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="row justify-content-center text-center g-5">

                {{-- VISION --}}
                <div class="col-md-5">
                    <h3 class="fw-serif mb-3">Vision</h3>
                    <div class="divider"></div>
                    <p class="text-muted text-justify">
                        To become a platform that advances and sustains
                        the development of Indonesian visual art.
                    </p>
                </div>

                {{-- MISSION --}}
                <div class="col-md-5">
                    <h3 class="fw-serif mb-3">Mission</h3>
                    <div class="divider"></div>
                    <p class="text-muted text-justify">
                        Actively initiating, curating, and educating through art
                        programs that aim to explore, examine, and promote
                        Indonesian artworks, both nationally and internationally.
                    </p>
                </div>

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

            <div class="row justify-content-center align-items-start g-5">

                {{-- FOUNDER IMAGE --}}
                <div class="col-md-4 text-center">
                    <figure class="art-card">
                        <img src="{{ asset('img/founder.jpeg') }}" alt="Jefri Caniago – Founder Kiniko Art Management"
                            class="img-fluid">
                        <figcaption class="small text-muted mt-3">
                            Portrait of Jefri Caniago
                        </figcaption>
                    </figure>
                </div>

                {{-- FOUNDER BIO --}}
                <div class="col-md-7 text-justify">

                    <h3 class="mb-1">Jefri Caniago</h3>
                    <p class="small text-uppercase text-muted mb-4" style="letter-spacing:2px;">
                        Founder & Art Director
                    </p>

                    <p>
                        Born in Solo on 22 September 1988, Jefri Caniago is a gallerist and
                        art management practitioner of <strong>Minangkabau descent</strong>,
                        who has long been engaged in the contemporary art ecosystem of
                        Yogyakarta.
                        He completed his higher education in
                        <strong>Business Management at Universitas Terbuka</strong>.
                    </p>


                    <p>
                        As the Director of <strong>Kiniko Art Management</strong> and
                        <strong>Kiniko Art</strong> (Art Room), Jefri is widely known
                        among artists across generations.
                        Previously, he also served as Director of
                        <strong>wART a Art Management</strong>,
                        a platform that presented major exhibitions such as
                        <em>Jogja Affordable Art</em>,
                        <em>Warta Exhibition</em>, and
                        <em>Yogya Young Artist</em>.
                    </p>

                    <p>
                        Through Kiniko Art Management, Jefri has initiated and managed
                        numerous programs dedicated to presenting and archiving
                        artworks from diverse generations and artistic tendencies.
                        These include young artists as well as senior and master artists
                        who play a significant role in the history of Indonesian art,
                        such as <strong>Aming Prayitno</strong>,
                        <strong>Suwaji</strong>, and
                        <strong>Subroto SM</strong>.
                    </p>

                    <p>
                        Throughout his career, Jefri has been involved in dozens of
                        exhibitions that provide platforms for artists to present
                        their works to wider audiences, while fostering sustainable
                        artistic dialogue and appreciation.
                    </p>

                    <p>
                        In addition to curatorial and exhibition management practices,
                        Jefri is also active as an <strong>art consultant</strong> and
                        continues to build collaborations with various stakeholders
                        in the field of visual arts. He consistently works to bridge
                        artists—particularly emerging artists—with professional
                        galleries and management, both nationally and internationally.
                    </p>

                </div>

            </div>

        </div>
    </section>
    {{-- PHILOSOPHY --}}
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
