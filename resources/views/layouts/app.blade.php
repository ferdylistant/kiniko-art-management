<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">

    <title>@yield('title', 'Kiniko Art Management | Contemporary Art, Exhibition & Artist Representation')</title>

    {{-- BASIC SEO --}}
    <meta name="description" content="@yield('meta_description', 'Kiniko Art Management adalah platform manajemen seni kontemporer yang berfokus pada pameran, seniman, dan narasi institusional.')">
    <meta name="keywords"
        content="art management, galeri seni, pameran seni, seniman kontemporer, kurator, art exhibition Indonesia">
    <meta name="author" content="Kiniko Art Management">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:title" content="@yield('title', 'Kiniko Art Management')">
    <meta property="og:description" content="@yield('meta_description', 'Manajemen seni dan pameran kontemporer dengan pendekatan institusional.')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('meta_image', asset('images/og-default.jpg'))">
    <meta property="og:locale" content="id_ID">

    {{-- VIEWPORT --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- STRUCTURED DATA (ART ORGANIZATION) --}}
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "{{ url('/') }}#organization",
  "name": "Kiniko Art Management",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('img/logo.png') }}",
  "image": "{{ asset('img/og-default.jpg') }}",
  "description": "Art management platform focusing on exhibitions, artists, and cultural narratives"
}
</script>

    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ivory">
    @include('partials.navbar')

    <main>
        @yield('content')
        <button id="scrollTopBtn" aria-label="Scroll to top">
            ↑
        </button>
    </main>

    @include('partials.footer')

    <script>
        window.addEventListener('scroll', () => {
            document.querySelector('.navbar')
                .classList.toggle('scrolled', window.scrollY > 40);
        });
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('scrollTopBtn');

            if (!btn) return;

            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    btn.classList.add('show');
                } else {
                    btn.classList.remove('show');
                }
            });

            btn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
