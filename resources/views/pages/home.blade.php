@extends('layouts.app')

@section('content')

<x-hero
    badge="Since {{ config('site.since') }}"
    title="Secure Your Future. Simplify Your Finances."
    subtitle="Welcome to Chirag Investcare Finserv LLP. Be rest assured that your wealth is managed with thoughtful planning to protect what matters most."
    cta-text="Start Your Journey"
    :cta-url="route('contact')"
    secondary-cta-text="Our Services"
    :secondary-cta-url="route('our-services')"
>
    <div class="hero-stats">
        <div class="stat-item">
            <span class="stat-label">Legacy of Trust Since {{ config('site.since') }}</span>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-count="2000">0</span><span class="stat-suffix">+</span>
            <span class="stat-label">Happy Families Served</span>
        </div>
    </div>
</x-hero>

<section class="trust-metrics-bar">
    <div class="container-xl">
        <div class="trust-metrics-inner">
            <div class="trust-metric">
                <span class="stat-number">Since {{ config('site.since') }}</span>
                <span class="stat-label">Legacy of Trust</span>
            </div>
            <div class="trust-metric">
                <span class="stat-number" data-count="2000">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Happy Families Served</span>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container-xl text-center">
        <h2 class="section-title">Financial Planning Built on Trust</h2>
        <p class="section-lead mx-auto">At Chirag Investcare Finserv LLP, we believe that true financial success isn't about chasing the highest possible risk or trying to be the absolute best in the market. It is about steady, consistent growth. Small market fluctuations and minor economic hurdles are an absolutely fine, normal part of the investing journey. However, our core mandate is to structure your portfolio so that you and your family never face any major financial problems. We build resilient portfolios so you can be rest assured about your future.</p>
        <div class="mt-4">
            <a href="{{ route('about-us') }}" class="btn btn-outline-primary">About Us</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-xl">
        <h2 class="section-title text-center">Comprehensive Wealth &amp; Protection Solutions</h2>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-3">
                <x-service-card
                    title="Core Investments"
                    description="Mutual funds, equity, corporate FDs and bonds tailored to your goals."
                    icon="bi-graph-up-arrow"
                    :url="route('our-services') . '#core-investments'"
                />
            </div>
            <div class="col-md-6 col-lg-3">
                <x-service-card
                    title="Premium Wealth Solutions"
                    description="PMS, AIF, MLD, SIF, and GIFT City investments for sophisticated portfolios."
                    icon="bi-gem"
                    :url="route('our-services') . '#premium-wealth'"
                />
            </div>
            <div class="col-md-6 col-lg-3">
                <x-service-card
                    title="Insurance & Risk"
                    description="Life, health, and travel insurance to protect what matters most."
                    icon="bi-shield-check"
                    :url="route('our-services') . '#insurance'"
                />
            </div>
            <div class="col-md-6 col-lg-3">
                <x-service-card
                    title="Specialised Services"
                    description="NRI investments, will formation, and estate planning."
                    icon="bi-briefcase"
                    :url="route('our-services') . '#specialised'"
                />
            </div>
        </div>
    </div>
</section>

<section class="section section-green-light">
    <div class="container-xl">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="section-title">How We Work With You</h2>
                <p>We start by listening, craft a customized roadmap, implement seamlessly, and review regularly — so you remain on the safest, most efficient path to your goals.</p>
                <a href="{{ route('our-approach') }}" class="btn btn-primary">Our Approach</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach ([
                        ['num' => '1', 'title' => 'Understand', 'text' => 'Map your financial health, obligations, and aspirations.'],
                        ['num' => '2', 'title' => 'Design', 'text' => 'Craft realistic, resilient strategies — not high-risk gambles.'],
                        ['num' => '3', 'title' => 'Implement', 'text' => 'Execute investments and protections seamlessly.'],
                        ['num' => '4', 'title' => 'Monitor', 'text' => 'Track your portfolio and meet regularly to stay on course.'],
                    ] as $step)
                        <div class="col-sm-6">
                            <div class="mini-feature">
                                <i class="bi bi-{{ $step['num'] }}-circle-fill"></i>
                                <strong>{{ $step['title'] }}</strong> — {{ $step['text'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section contact-preview-section">
    <div class="container-xl">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-5">
                <h2 class="section-title">Be Rest Assured — Let's Secure Your Future Together</h2>
                <p>Reach out to discuss your financial goals with our team in Vadodara.</p>
                <ul class="contact-preview-list">
                    <li><i class="bi bi-telephone"></i> <a href="tel:{{ config('site.phone_tel') }}">{{ config('site.phone') }}</a></li>
                    <li><i class="bi bi-envelope"></i> <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></li>
                    <li><i class="bi bi-clock"></i> {{ config('site.business_hours') }}</li>
                </ul>
            </div>
            <div class="col-lg-7">
                <x-contact-form compact heading="Quick enquiry" subheading="We'll get back to you promptly." />
            </div>
        </div>
    </div>
</section>

<x-cta-banner />
@endsection
