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
                <span class="client-logo">Aether Global</span>
                <span class="client-logo">Komorebi Paris</span>
                <span class="client-logo">Vanguard Tech</span>
                <span class="client-logo">Lumina</span>
                <span class="client-logo">Zenith</span>
            </div>
            @endfor
        </div>
    </div>

    <!-- Testimonials Marquee -->
    <div class="marquee-wrapper testimonials-marquee">
        <div class="marquee-track reverse">
            @for($i = 0; $i < 2; $i++)
            <div class="marquee-content">
                @forelse($testimonials ?? [] as $review)
                    <div class="testimonial-card">
                        <p class="quote">"{{ $review->content }}"</p>
                        <div class="reviewer mt-2">
                            <span class="reviewer-name">{{ $review->client_name }}</span>
                            <span class="reviewer-title text-muted">{{ $review->client_role }}@if($review->client_company) — {{ $review->client_company }}@endif</span>
                        </div>
                    </div>
                @empty
                    <div class="testimonial-card">
                        <p class="quote">"Working with ACCORD felt effortless. They delivered world-class results that exceeded our highest expectations."</p>
                        <div class="reviewer mt-2">
                            <span class="reviewer-name">Alexander Wright</span>
                            <span class="reviewer-title text-muted">Founder & CEO — Aether Global</span>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="quote">"The level of craft and vision they brought to our brand identity was extraordinary. A true design powerhouse."</p>
                        <div class="reviewer mt-2">
                            <span class="reviewer-name">Elena Rostova</span>
                            <span class="reviewer-title text-muted">Creative Director — Komorebi Paris</span>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="quote">"Flawless execution and incredible attention to detail. ACCORD transformed our digital presence completely."</p>
                        <div class="reviewer mt-2">
                            <span class="reviewer-name">Marcus Vance</span>
                            <span class="reviewer-title text-muted">Head of Product — Vanguard Tech</span>
                        </div>
                    </div>
                @endforelse
            </div>
            @endfor
        </div>
    </div>
</section>
