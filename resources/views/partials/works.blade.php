<section class="section" id="work">
    <div class="container works-container">
        <div class="works-header reveal">
            <span class="label-small">Selected works</span>
            <h2 class="works-title">A glimpse of what we've been building for our partners.</h2>
        </div>
        
        <div class="works-grid">
            @forelse($projects ?? [] as $project)
                <div class="work-card reveal">
                    <div class="work-thumbnail-wrapper">
                        @if($project->image_path)
                            <div class="work-thumbnail" style="background-image: url('{{ $project->image_url }}'); background-size: cover; background-position: center; min-height: 280px; border-radius: 8px;"></div>
                        @else
                            <div class="work-thumbnail" style="background-color: #000B5B; min-height: 280px; border-radius: 8px;"></div>
                        @endif
                        <div class="work-tags-overlay mt-2">
                            <span class="tag tag-small">{{ $project->category }}</span>
                            @if($project->year)
                                <span class="tag tag-small">{{ $project->year }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="work-info mt-3">
                        <h3 class="work-name">{{ $project->title }}</h3>
                        <p class="work-desc text-muted">{{ $project->description }}</p>
                    </div>
                </div>
            @empty
                <div class="work-card reveal">
                    <div class="work-thumbnail-wrapper">
                        <div class="work-thumbnail" style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1200&auto=format&fit=crop'); background-size: cover; background-position: center; min-height: 280px; border-radius: 8px;"></div>
                        <div class="work-tags-overlay mt-2">
                            <span class="tag tag-small">Web Application / UI & UX</span>
                            <span class="tag tag-small">2026</span>
                        </div>
                    </div>
                    <div class="work-info mt-3">
                        <h3 class="work-name">Aether Digital Experience</h3>
                        <p class="work-desc text-muted">Ultra-modern digital platform designed for Next-Gen interactive web experience.</p>
                    </div>
                </div>

                <div class="work-card reveal">
                    <div class="work-thumbnail-wrapper">
                        <div class="work-thumbnail" style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop'); background-size: cover; background-position: center; min-height: 280px; border-radius: 8px;"></div>
                        <div class="work-tags-overlay mt-2">
                            <span class="tag tag-small">Brand Identity & Strategy</span>
                            <span class="tag tag-small">2026</span>
                        </div>
                    </div>
                    <div class="work-info mt-3">
                        <h3 class="work-name">Komorebi Haute Couture</h3>
                        <p class="work-desc text-muted">Luxury monochrome visual identity and e-commerce experience.</p>
                    </div>
                </div>

                <div class="work-card reveal">
                    <div class="work-thumbnail-wrapper">
                        <div class="work-thumbnail" style="background-image: url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=1200&auto=format&fit=crop'); background-size: cover; background-position: center; min-height: 280px; border-radius: 8px;"></div>
                        <div class="work-tags-overlay mt-2">
                            <span class="tag tag-small">Product Design & Mobile App</span>
                            <span class="tag tag-small">2025</span>
                        </div>
                    </div>
                    <div class="work-info mt-3">
                        <h3 class="work-name">Vanguard Autonomous OS</h3>
                        <p class="work-desc text-muted">Futuristic IoT dashboard and mobile interface for smart infrastructure.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="works-footer reveal">
            <a href="#contact" class="link-arrow">↳ See all works</a>
        </div>
    </div>
</section>
