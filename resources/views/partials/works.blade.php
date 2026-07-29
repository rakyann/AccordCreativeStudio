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
                            <div class="work-thumbnail" style="background-color: #FF5500; min-height: 280px; border-radius: 8px;"></div>
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
                <p class="text-muted">No projects uploaded yet.</p>
            @endforelse
        </div>

        <div class="works-footer reveal">
            <a href="#contact" class="link-arrow">↳ See all works</a>
        </div>
    </div>
</section>
