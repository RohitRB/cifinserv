@extends('layouts.app')

@section('content')
@php $assets = config('site.assets'); @endphp

<x-hero
    variant="page"
    title="Business Phone Systems"
    subtitle="Office-based or cloud-based VoIP — tested, proven, and ready for your Australian business setup."
    :image="$assets . '/2025/01/Font-page-heading-mobile-159.jpg'"
    cta-text="Get Free Phone Demo"
/>

<section class="section section-cream">
    <div class="container-xl">
        <h2 class="section-title text-center">Which system suits your team?</h2>
        <div class="row g-4 mt-2">
            <div class="col-lg-6">
                <div class="compare-card compare-card-highlight">
                    <h3><i class="bi bi-cloud"></i> Cloud-based VoIP</h3>
                    <p>Ideal for hybrid or remote teams. Calls over the internet with mobile apps, queues, IVR, and voicemail-to-email.</p>
                    <ul>
                        <li>Work from anywhere</li>
                        <li>Microsoft Teams integration</li>
                        <li>Fast rollout (3–5 business days)</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="compare-card">
                    <h3><i class="bi bi-building"></i> Office-based VoIP</h3>
                    <p>Classic reliability for one fixed location — cost-effective desk phones with lower ongoing costs.</p>
                    <ul>
                        <li>On-site handsets</li>
                        <li>Strong call quality</li>
                        <li>Great for reception-heavy teams</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-xl">
        <h2 class="section-title">Features businesses use every day</h2>
        <div class="row g-3 mt-2">
            @foreach (['Call menus & queues', 'Voicemail to email', 'Mobile & desktop apps', '1300 / 1800 numbers', 'CRM integration', 'Call recording & compliance', 'Holiday hours & IVR', 'Number porting'] as $feat)
                <div class="col-md-6 col-lg-3"><div class="mini-feature"><i class="bi bi-check2"></i> {{ $feat }}</div></div>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-green-light">
    <div class="container-xl text-center">
        <h2 class="section-title">20-second call pickup</h2>
        <p class="section-lead mx-auto">During Victorian business hours our average call pickup time is under 20 seconds. Installation, programming, and training included.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg mt-2">Book your free demo</a>
    </div>
</section>

<section class="section">
    <div class="container-xl">
        <h2 class="section-title">FAQs</h2>
        <div class="accordion faq-accordion" id="phoneFaq">
            @foreach ([
                ['q' => 'Can my current number be transferred?', 'a' => 'Yes — your existing number can be ported to the new system so customers keep the same contact details.'],
                ['q' => 'Which is better: cloud or office-based?', 'a' => 'One fixed site suits office-based VoIP; hybrid or remote teams benefit from cloud-based systems.'],
                ['q' => 'How long to go live?', 'a' => 'Most small teams go live in 3–5 business days for cloud-only setups after approvals; hardware orders may add ~1 week.'],
            ] as $i => $faq)
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $i }}">{{ $faq['q'] }}</button>
                    </h3>
                    <div id="faq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#phoneFaq">
                        <div class="accordion-body">{{ $faq['a'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<x-testimonials />
<x-cta-banner title="Let's find the right phone system for you" button-text="Get Free Demo" />
@endsection
