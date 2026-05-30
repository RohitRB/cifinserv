@props([
    'showMap' => false,
    'compact' => false,
    'heading' => "Let's Secure Your Future Together",
    'subheading' => 'Fill out the form below and our team will get back to you promptly.',
])

<section class="contact-form-section {{ $compact ? 'contact-form-compact' : '' }}" id="contact-form">
    @if (!$compact)
    <div class="container-xl">
        <div class="row g-5">
    @endif
            <div class="{{ $showMap ? 'col-lg-6' : ($compact ? 'col-12' : 'col-lg-8 mx-auto') }}">
                <div class="contact-form-card">
                    <h2 class="section-title">{{ $heading }}</h2>
                    @if ($subheading)
                        <p class="section-lead">{{ $subheading }}</p>
                    @endif

                    <form class="site-contact-form" action="#" method="post" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="service" class="form-label">Service of Interest</label>
                                <select class="form-select" id="service" name="service" required>
                                    <option value="">Select a service</option>
                                    <option>Mutual Funds</option>
                                    <option>Stock Market / Demat Services</option>
                                    <option>Corporate FDs &amp; Bonds</option>
                                    <option>Portfolio Management Services (PMS)</option>
                                    <option>Alternative Investment Funds (AIF)</option>
                                    <option>Insurance &amp; Risk Management</option>
                                    <option>NRI Investments</option>
                                    <option>Will Formation &amp; Estate Planning</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg">Submit Inquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if ($showMap)
                <div class="col-lg-6">
                    <div class="contact-info-panel">
                        <h3 class="h5 mb-3">Visit Us</h3>
                        <p><i class="bi bi-geo-alt-fill text-primary"></i> {{ config('site.address') }}</p>
                        <p><i class="bi bi-telephone-fill text-primary"></i> <a href="tel:{{ config('site.phone_tel') }}">{{ config('site.phone') }}</a></p>
                        <p><i class="bi bi-envelope-fill text-primary"></i> <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></p>
                        <p><i class="bi bi-clock-fill text-primary"></i> {{ config('site.business_hours') }}</p>
                        <div class="map-placeholder mt-4">
                            <iframe
                                title="{{ config('site.name') }} location map"
                                src="{{ config('site.map_embed') }}"
                                width="100%"
                                height="280"
                                style="border:0;border-radius:12px;"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            @endif
    @if (!$compact)
        </div>
    </div>
    @endif
</section>
