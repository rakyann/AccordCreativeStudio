<section class="section" id="work">
    <div class="container works-container">
        <div class="works-header reveal">
            <span class="label-small">Selected works</span>
            <h2 class="works-title">A glimpse of what we've been building for our partners.</h2>
        </div>
        
        <div class="works-grid">
            @foreach(config('portfolio') as $project)
                <div class="work-card reveal">
                    <div class="work-thumbnail-wrapper">
                        <!-- Placeholder div since we don't have actual images -->
                        <div class="work-thumbnail" style="background-color: #1a1a1a;">
                            @if($project['coming_soon'])
                                <div class="badge-coming-soon">Coming Soon</div>
                            @endif
                        </div>
                        <div class="work-tags-overlay">
                            @foreach($project['tags'] as $tag)
                                <span class="tag tag-small">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="work-info">
                        <h3 class="work-name">{{ $project['title'] }}</h3>
                        <p class="work-desc text-muted">{{ $project['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="works-footer reveal">
            <a href="#" class="link-arrow">↳ See all works</a>
        </div>
    </div>
</section>
