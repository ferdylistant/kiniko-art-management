<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">

    <title>@yield('title', 'Kiniko Art Management | Contemporary Art, Exhibition & Artist Representation')</title>

    {{-- BASIC SEO --}}
    <meta name="description" content="@yield('meta_description', 'Kiniko Art Management is a contemporary art management platform that presents exhibitions, artists, and institution-based curatorial narratives.')">
    <meta name="keywords"
        content="art management, art gallery, art exhibitions, contemporary artists, curators, art exhibition Indonesia">
    <meta name="author" content="Kiniko Art Management">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:title" content="@yield('title', 'Kiniko Art Management')">
    <meta property="og:description" content="@yield('meta_description', 'Contemporary art management and exhibitions with an institution-based curatorial approach.')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('meta_image', asset('images/og-default.jpg'))">
    <meta property="og:locale" content="en_US">


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

    @vite('resources/css/app.css')
    {{-- @vite('resources/css/vendor/aos.css') --}}
    @stack('styles')
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
    @vite('resources/js/app.js')
    {{-- @vite('resources/js/vendor/aos.js') --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.querySelector('.navbar')
            const scrollBtn = document.getElementById('scrollTopBtn')

            if (!navbar && !scrollBtn) return

            const onScroll = () => {
                const y = window.scrollY

                if (navbar) {
                    navbar.classList.toggle('scrolled', y > 40)
                }

                if (scrollBtn) {
                    scrollBtn.classList.toggle('show', y > 300)
                }
            }

            window.addEventListener('scroll', onScroll, {
                passive: true
            });

            function scrollToTop(duration = 900) {
                const start = window.scrollY;
                const startTime = performance.now();

                function easeOutCubic(t) {
                    return 1 - Math.pow(1 - t, 3);
                }

                function step(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = easeOutCubic(progress);

                    window.scrollTo(0, start * (1 - eased));

                    if (progress < 1) {
                        requestAnimationFrame(step);
                    }
                }

                requestAnimationFrame(step);
            }

            scrollBtn.addEventListener('click', () => {
                scrollToTop(900);
            });

            onScroll() // initial state
        })
    </script>

    @stack('scripts')
</body>

</html>
