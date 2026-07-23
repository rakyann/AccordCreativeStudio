<section class="section-large" id="testimonials">
    <div class="container testimonials-header reveal">
        <h2 class="testimonials-title">Good work gets noticed. Great work gets talked about.</h2>
        <div class="testimonials-links">
            <a href="#contact" class="link-arrow">↳ Let's Collaborate</a>
            <a href="#work" class="link-arrow">↳ View all work</a>
        </div>
    </div>

    <!-- Client Logos Marquee -->
    <div class="marquee-wrapper logos-marquee">
        <div class="marquee-track">
            @for($i = 0; $i < 3; $i++)
            <div class="marquee-content">
                <span class="client-logo">TechNova</span>
                <span class="client-logo">Lumina</span>
                <span class="client-logo">Zenith</span>
                <span class="client-logo">Nexus</span>
                <span class="client-logo">Vortex</span>
                <span class="client-logo">Echo</span>
            </div>
            @endfor
        </div>
    </div>

    <!-- Testimonials Marquee -->
    <div class="marquee-wrapper testimonials-marquee">
        <div class="marquee-track reverse">
            @for($i = 0; $i < 2; $i++)
            <div class="marquee-content">
                @foreach(config('testimonials') as $review)
                    <div class="testimonial-card">
                        <p class="quote">"{{ $review['quote'] }}"</p>
                        <div class="reviewer">
                            <span class="reviewer-name">{{ $review['name'] }}</span>
                            <span class="reviewer-title text-muted">{{ $review['title'] }}</span>
                            <span class="review-source text-muted">• {{ $review['source'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            @endfor
        </div>
    </div>
</section>
