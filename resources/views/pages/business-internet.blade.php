@extends('layouts.app')

@section('content')
@php $assets = config('site.assets'); @endphp

<x-hero
    variant="page"
    title="Business Internet"
    subtitle="NBN, Ethernet and fibre on Australia's leading networks — with optional 4G/5G backup so your phones and team stay online."
    :image="$assets . '/2025/01/Font-page-heading-mobile-159.jpg'"
    cta-text="Check availability"
/>

<section class="section">
    <div class="container-xl">
        <h2 class="section-title text-center">Reliable connectivity for modern business</h2>
        <p class="section-lead text-center mx-auto">Whether you need a handful of SIMs or a full rollout, we match plans to how your team actually works — no paying for data you don't need.</p>
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <x-service-card title="NBN business" description="Fast, dependable NBN with options aligned to your sites and usage." icon="bi-speedometer2" :url="route('contact')" />
            </div>
            <div class="col-md-4">
                <x-service-card title="Ethernet & fibre" description="Higher-grade links for offices that need consistent throughput and SLA-backed performance." icon="bi-hdd-network" :url="route('contact')" />
            </div>
            <div class="col-md-4">
                <x-service-card title="4G/5G backup" description="Keep desk phones and critical systems online during outages with mobile failover." icon="bi-reception-4" :url="route('contact')" />
            </div>
        </div>
    </div>
</section>

<section class="section section-cream">
    <div class="container-xl">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="section-title">Bundled with your phone &amp; IT</h2>
                <p>Internet, VoIP, and managed IT from one Melbourne partner — one invoice, one support number, and configuration tuned together (VLANs, QoS, routing).</p>
            </div>
            <div class="col-lg-6">
                <ul class="bundle-list">
                    <li><i class="bi bi-check-circle-fill"></i> Wi-Fi design &amp; roaming</li>
                    <li><i class="bi bi-check-circle-fill"></i> VPNs for hybrid work</li>
                    <li><i class="bi bi-check-circle-fill"></i> Partner brands: Aussie Broadband &amp; more</li>
                    <li><i class="bi bi-check-circle-fill"></i> Free speed upgrades where eligible</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container-xl text-center">
        <h2 class="section-title">What happens during an internet outage?</h2>
        <p class="section-lead mx-auto">Cloud phone systems keep receiving calls; staff can answer via mobile app on 4G/5G. Optional router backup keeps desk phones online where coverage allows.</p>
    </div>
</section>

<x-cta-banner title="Need business internet that works with your phones?" button-text="Get a quote" />
@endsection
