@extends('layouts.app')

@section('content')

<x-hero
    variant="page"
    title="About Chirag Investcare Finserv LLP"
    subtitle="Financial planning built on trust, transparency, and family values since {{ config('site.since') }}."
    cta-text="Contact Us"
    :cta-url="route('contact')"
    :show-image="false"
/>

<section class="section section-light">
    <div class="container-xl">
        <h2 class="section-title">Our Philosophy</h2>
        <p class="section-lead">We approach wealth management with a highly protective and practical mindset. Life is full of minor bumps in the road, and small hurdles are absolutely fine — they are part of the process. However, our strategic planning is designed to shield you and your family from major financial crises. We focus on risk mitigation, steady compounding, and clear guidance so you can live your life without financial anxiety. With us as your financial partners, you can truly be rest assured.</p>
    </div>
</section>

<section class="section">
    <div class="container-xl">
        <h2 class="section-title text-center">Our Leadership &amp; Legacy</h2>
        <div class="row g-4 mt-2">
            <div class="col-lg-6">
                <div class="leadership-card">
                    <h3>Chirag Shah</h3>
                    <p class="leadership-role">Founder</p>
                    <p>Chirag Investcare Finserv LLP was built on Chirag Shah's founding vision in {{ config('site.since') }}: financial planning should not be about taking aggressive risks just to be the absolute best in the market. Instead, it is about building an unbreakable financial safety net. With decades of experience navigating market cycles, Chirag's core mission has always been to ensure that while clients may face small, everyday economic hurdles, they are completely protected from any major financial problems. His approach is rooted in deep trust, transparency, and family values.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="leadership-card">
                    <h3>Manan Shah</h3>
                    <p class="leadership-role">Second Generation Leadership</p>
                    <p>Wealth management is a lifelong journey, and our commitment to your family spans generations. In 2015, the firm proudly welcomed its second generation of leadership when Chirag's son, Manan Shah, officially joined the business. Bringing a dynamic, modern approach to our comprehensive financial solutions, his addition ensures institutional continuity. This generational transition means that the wealth we build for you today will continue to be expertly managed for your children tomorrow.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-green-light">
    <div class="container-xl text-center">
        <h2 class="section-title">Our Mission</h2>
        <p class="section-lead mx-auto">To deliver transparent, client-centric financial solutions that safeguard capital, optimize tax efficiency, and generate sustainable wealth over the long term.</p>
    </div>
</section>

<x-cta-banner />
@endsection
