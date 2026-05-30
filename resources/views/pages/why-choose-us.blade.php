@extends('layouts.app')

@section('content')
@php $assets = config('site.assets'); @endphp

<x-hero
    variant="page"
    title="Why Choose Prime ICT"
    subtitle="Australian businesses choose us because our recommendations work in the real world — not just on paper."
    :image="$assets . '/2025/01/Font-page-heading-mobile-159.jpg'"
    cta-text="Talk to our team"
/>

<section class="section">
    <div class="container-xl">
        <div class="row g-4">
            @foreach ([
                ['num' => '01', 'title' => 'Since 1991', 'text' => 'Decades comparing and updating phone and ICT solutions for local businesses.'],
                ['num' => '02', 'title' => 'Melbourne-based gurus', 'text' => 'Under 20-second call pickup and hands-on support — no chatbot maze.'],
                ['num' => '03', 'title' => 'One invoice', 'text' => 'Phones, internet, mobile, printers, CCTV and IT on a single bill.'],
                ['num' => '04', 'title' => 'Pre-configured gear', 'text' => 'Extensions, IVRs, security policies and docs done before plug-in.'],
                ['num' => '05', 'title' => 'Trusted brands', 'text' => 'Microsoft, Yealink, 8×8, Fortinet, Yeastar, DrayTek, Lexmark & more.'],
                ['num' => '06', 'title' => 'Honest advice', 'text' => 'We avoid cheap-now-costly-later kit that forces paid upgrades later.'],
            ] as $reason)
                <div class="col-md-6 col-lg-4">
                    <div class="reason-card">
                        <span class="reason-num">{{ $reason['num'] }}</span>
                        <h3>{{ $reason['title'] }}</h3>
                        <p>{{ $reason['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-green-light">
    <div class="container-xl">
        <h2 class="section-title text-center">What's behind the scenes</h2>
        <p class="section-lead text-center mx-auto">Before you plug anything in, our engineers make your gear business-ready.</p>
        <div class="row g-3 mt-4 behind-grid">
            @foreach (['Network & security policies', 'VLANs, QoS and routing', 'Phone extensions & IVRs', 'Firmware & licences verified', 'Remote monitoring & backups', 'Site-specific documentation', 'Wi-Fi design & roaming', 'VPNs for hybrid work'] as $item)
                <div class="col-md-6 col-lg-3"><div class="behind-item"><i class="bi bi-gear"></i> {{ $item }}</div></div>
            @endforeach
        </div>
        <p class="text-center mt-4 fw-semibold">Plug it in and get on with business — no fiddly bits, no dramas.</p>
    </div>
</section>

<x-testimonials />

@if (!empty($clientLogos))
<section class="section section-light clients-section">
    <div class="container-xl">
        <h2 class="section-title text-center">Trusted by Australian Businesses</h2>
        <p class="section-lead text-center mx-auto mb-4">A selection of clients who rely on Prime ICT for phone systems, IT, and connectivity.</p>
        <div class="clients-logo-grid">
            @foreach ($clientLogos as $logo)
                <div class="client-logo-item">
                    <img src="{{ $logo }}" alt="Client logo" loading="lazy" width="160" height="80">
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<x-cta-banner />
@endsection
