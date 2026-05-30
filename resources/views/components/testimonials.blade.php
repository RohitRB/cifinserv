@props(['title' => 'Highly Recommended by Australian Businesses'])

<section class="section testimonials-section">
    <div class="container-xl">
        <h2 class="section-title text-center">{{ $title }}</h2>
        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <blockquote class="testimonial-card">
                    <div class="testimonial-stars">
                        @for ($i = 0; $i < 5; $i++) <i class="bi bi-star-fill"></i> @endfor
                    </div>
                    <p>"Fast support when we needed it — calls answered in seconds and issues sorted without the runaround."</p>
                    <footer><strong>Sarah M.</strong> — Melbourne SME</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="testimonial-card">
                    <div class="testimonial-stars">
                        @for ($i = 0; $i < 5; $i++) <i class="bi bi-star-fill"></i> @endfor
                    </div>
                    <p>"One invoice for phones, internet and IT. Our team finally has one number to call for everything."</p>
                    <footer><strong>James T.</strong> — Multi-site business</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="testimonial-card">
                    <div class="testimonial-stars">
                        @for ($i = 0; $i < 5; $i++) <i class="bi bi-star-fill"></i> @endfor
                    </div>
                    <p>"The cloud phone system made hybrid work simple. Plug-in handsets and remote apps just work."</p>
                    <footer><strong>Priya K.</strong> — Professional services</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>
