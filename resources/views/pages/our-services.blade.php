@extends('layouts.app')

@section('content')

<x-hero
    variant="page"
    title="Comprehensive Wealth &amp; Protection Solutions"
    subtitle="Expertly curated financial products and services to help you build, protect, and transfer wealth with confidence."
    cta-text="Start Your Journey"
    :cta-url="route('contact')"
    :show-image="false"
/>

<section class="section">
    <div class="container-xl">
        <div class="service-category" id="core-investments">
            <h2 class="service-category-title">Core Investments &amp; Wealth Creation</h2>
            <ul class="service-list">
                <li>
                    <strong>Mutual Funds</strong>
                    Expertly curated, diversified portfolios tailored to your specific goals and timeline.
                </li>
                <li>
                    <strong>Stock Market / Demat Services</strong>
                    Direct equity investment support focused on fundamentally strong companies.
                </li>
                <li>
                    <strong>Corporate FDs &amp; Bonds</strong>
                    Fixed-income solutions that provide stable, predictable returns.
                </li>
            </ul>
        </div>

        <div class="service-category" id="premium-wealth">
            <h2 class="service-category-title">Premium &amp; HNI Wealth Solutions</h2>
            <ul class="service-list">
                <li>
                    <strong>Portfolio Management Services (PMS)</strong>
                    Professionally managed portfolios for optimized returns with strictly managed risk.
                </li>
                <li>
                    <strong>Alternative Investment Funds (AIF)</strong>
                    Sophisticated, non-traditional investment vehicles for enhanced diversification.
                </li>
                <li>
                    <strong>Market-Linked Debentures (MLD)</strong>
                    Structured financial instruments offering equity-like growth with debt-like stability.
                </li>
                <li>
                    <strong>Specialised Investment Funds (SIF)</strong>
                    Targeted funds focused on specific economic sectors or strategic themes.
                </li>
                <li>
                    <strong>GIFT City Investments</strong>
                    Exclusive, globally diversified investment opportunities routed seamlessly through India's premier international financial hub.
                </li>
            </ul>
        </div>

        <div class="service-category" id="insurance">
            <h2 class="service-category-title">Insurance &amp; Risk Management</h2>
            <ul class="service-list">
                <li>
                    <strong>Life Insurance</strong>
                    Uncompromising protection to ensure your family's standard of living is completely secure.
                </li>
                <li>
                    <strong>Health Insurance</strong>
                    Comprehensive medical coverage for unexpected health emergencies.
                </li>
                <li>
                    <strong>Travel Insurance</strong>
                    Reliable financial protection against medical emergencies and unforeseen disruptions.
                </li>
            </ul>
        </div>

        <div class="service-category" id="specialised">
            <h2 class="service-category-title">Specialized Financial Services</h2>
            <ul class="service-list">
                <li>
                    <strong>NRI Investments</strong>
                    Compliant, tax-efficient financial planning and wealth management for Non-Resident Indians.
                </li>
                <li>
                    <strong>Will Formation &amp; Estate Planning</strong>
                    Clear, legally sound documentation for a smooth transition of your wealth.
                </li>
            </ul>
        </div>
    </div>
</section>

<x-cta-banner />
@endsection
