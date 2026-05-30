@extends('layouts.app')

@section('content')
@php $assets = config('site.assets'); @endphp

<x-hero
    variant="page"
    title="Managed IT Services"
    subtitle="Affordable Melbourne IT support: say goodbye to chatbots and get fast, real local help — with flexible support options."
    :image="$assets . '/2025/01/Font-page-heading-mobile-159.jpg'"
    cta-text="Get Free IT Consultation"
/>

<section class="section">
    <div class="container-xl">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="section-title">IT that protects your business</h2>
                <p>If your business handles customer data, IT isn't just Wi-Fi and devices — it's security and compliance. We help you work through the ACSC Essential Eight and tick the practical boxes that reduce risk.</p>
                <p>Single site or multiple locations, fixed office or hybrid teams — we provide all-in-one solutions to handle it all.</p>
                <ul class="bundle-list">
                    <li><i class="bi bi-check-circle-fill"></i> Cyber security &amp; firewall</li>
                    <li><i class="bi bi-check-circle-fill"></i> Microsoft 365 &amp; licensing</li>
                    <li><i class="bi bi-check-circle-fill"></i> Backups &amp; disaster recovery</li>
                    <li><i class="bi bi-check-circle-fill"></i> Monitoring &amp; patch management</li>
                    <li><i class="bi bi-check-circle-fill"></i> Remote &amp; multi-site support</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-card">
                    <h3>$1/user/day package</h3>
                    <p>Admin, backup, protection, and 24/7 security monitoring for Microsoft 365 Business customers.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary w-100">Enquire now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-cream">
    <div class="container-xl">
        <h2 class="section-title text-center">SMB1001 certification support</h2>
        <p class="section-lead text-center mx-auto">As an Authorised CyberCert Partner, we build, set up and maintain the controls that make you certification-ready — turning IT spend into a sales and marketing asset.</p>
    </div>
</section>

<section class="section">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-4"><x-service-card title="Cyber security" description="MFA, firewalls, awareness training, and practical Essential Eight alignment." icon="bi-shield-lock" :url="route('contact')" link-text="Talk to us" /></div>
            <div class="col-md-4"><x-service-card title="Backups & recovery" description="Secure backups, recovery testing, and documented restore plans." icon="bi-cloud-arrow-up" :url="route('contact')" link-text="Talk to us" /></div>
            <div class="col-md-4"><x-service-card title="Device & licensing" description="New devices, Microsoft licensing, and day-to-day helpdesk support." icon="bi-laptop" :url="route('contact')" link-text="Talk to us" /></div>
        </div>
    </div>
</section>

<x-testimonials />
<x-cta-banner title="Ready for reliable Melbourne IT support?" button-text="Get Free Consultation" />
@endsection
