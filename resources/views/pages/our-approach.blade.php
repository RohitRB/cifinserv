@extends('layouts.app')

@section('content')

<x-hero
    variant="page"
    title="How We Work With You"
    subtitle="A clear, step-by-step process designed to give you peace of mind at every stage of your financial journey."
    cta-text="Get in Touch"
    :cta-url="route('contact')"
    :show-image="false"
/>

<section class="section">
    <div class="container-xl">
        <div class="process-timeline">
            <div class="process-step">
                <div class="process-step-num">1</div>
                <h3>Understand</h3>
                <p>We start by listening. We map out your current financial health, family obligations, and future aspirations.</p>
            </div>
            <div class="process-step">
                <div class="process-step-num">2</div>
                <h3>Design</h3>
                <p>We craft a customized financial roadmap. We focus on realistic, resilient strategies rather than high-risk gambles.</p>
            </div>
            <div class="process-step">
                <div class="process-step-num">3</div>
                <h3>Implement</h3>
                <p>Once you are comfortable, we execute the investments and secure the necessary protections seamlessly.</p>
            </div>
            <div class="process-step">
                <div class="process-step-num">4</div>
                <h3>Monitor &amp; Review</h3>
                <p>We actively track your portfolio and meet with you regularly to ensure you remain on the safest, most efficient path to your goals.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container-xl text-center">
        <h2 class="section-title">Built on Trust Since {{ config('site.since') }}</h2>
        <p class="section-lead mx-auto">Our approach is rooted in protecting your family from major financial problems while helping you navigate the normal ups and downs of investing with confidence.</p>
        <a href="{{ route('about-us') }}" class="btn btn-outline-primary mt-3">Learn About Us</a>
    </div>
</section>

<x-cta-banner />
@endsection
