@extends('layouts.app')

@section('title', 'Contact | Kiniko Art Management')
@section('meta_description', 'Contact Kiniko Art Management for exhibitions, collaborations, and institutional
    inquiries.')

@section('content')

    <section class="py-5">
        <div class="container">

            <header class="text-center mb-5">
                <h1>Contact</h1>
                <div class="divider"></div>
                <p class="text-muted small">
                    For exhibitions, collaborations, and institutional inquiries.
                </p>
            </header>

            <div class="row justify-content-center">

                {{-- CONTACT INFO --}}
                <div class="col-lg-5 mb-4 mb-lg-0">

                    <div class="art-card p-4 h-100">

                        <h4 class="mb-3">Kiniko Art Management</h4>

                        <p class="small text-muted">
                            Yogyakarta, Indonesia
                        </p>

                        <p class="small text-muted mb-1">
                            Email:
                            <a href="mailto:info@kiniko.id" class="text-decoration-none">
                                info@kiniko.id
                            </a>
                        </p>

                        <p class="small text-muted">
                            Instagram:
                            <a href="#" class="text-decoration-none">
                                @kiniko.art
                            </a>
                        </p>

                    </div>

                </div>

                {{-- CONTACT FORM --}}
                <div class="col-lg-6">

                    <div class="art-card p-4">

                        <form method="POST" action="#">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label small">Name</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label small">Email</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label small">Message</label>
                                <textarea rows="5" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="text-uppercase small text-decoration-none"
                                style="letter-spacing:2px; color:var(--kiniko-red); background:none; border:none;">
                                Send Message →
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
