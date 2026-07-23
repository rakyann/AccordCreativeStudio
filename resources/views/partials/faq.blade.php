<section class="section" id="faq">
    <div class="container faq-container">
        <div class="faq-header reveal">
            <h2 class="faq-title">FAQ</h2>
            <p class="faq-subtitle text-muted">Got questions? We've got answers.</p>
        </div>
        
        <div class="faq-accordion reveal">
            @foreach(config('faq') as $item)
                <div class="faq-item">
                    <button class="faq-question">
                        <span>{{ $item['question'] }}</span>
                        <div class="faq-icon">
                            <span class="icon-line horizontal"></span>
                            <span class="icon-line vertical"></span>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p class="text-muted">{{ $item['answer'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
