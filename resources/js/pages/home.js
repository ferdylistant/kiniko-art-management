document.addEventListener('DOMContentLoaded', () => {
    // AOS.init({
    //     duration: 900,
    //     easing: 'ease-out-cubic',
    //     once: true,
    //     offset: 80,
    // })
    const reveals = document.querySelectorAll('.reveal')

    if (!reveals.length) return

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible')
                    obs.unobserve(entry.target)
                }
            })
        },
        {
            threshold: 0.15,
            rootMargin: '0px 0px -80px 0px',
        }
    )

    reveals.forEach(el => observer.observe(el))
})