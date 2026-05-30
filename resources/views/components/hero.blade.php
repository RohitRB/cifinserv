@props([
    'title',
    'subtitle' => null,
    'badge' => null,
    'image' => null,
    'ctaText' => 'Start Your Journey',
    'ctaUrl' => null,
    'secondaryCtaText' => null,
    'secondaryCtaUrl' => null,
    'variant' => 'home',
    'showImage' => true,
])

@php
    $ctaUrl = $ctaUrl ?? route('contact');
@endphp

<section class="hero-section hero-{{ $variant }}">
    <div class="hero-bg-shape"></div>
    <div class="container-xl">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="{{ $showImage ? 'col-lg-6' : 'col-lg-8 mx-auto text-center' }}">
                @if ($badge)
                    <span class="hero-badge">{{ $badge }}</span>
                @endif
                <h1 class="hero-title">{{ $title }}</h1>
                @if ($subtitle)
                    <p class="hero-subtitle {{ $showImage ? '' : 'mx-auto' }}">{{ $subtitle }}</p>
                @endif
                <div class="hero-actions {{ $showImage ? '' : 'justify-content-center' }}">
                    <a href="{{ $ctaUrl }}" class="btn btn-primary btn-lg">{{ $ctaText }}</a>
                    @if ($secondaryCtaText)
                        <a href="{{ $secondaryCtaUrl ?? route('our-services') }}" class="btn btn-outline-primary btn-lg">{{ $secondaryCtaText }}</a>
                    @endif
                </div>
                @isset($slot)
                    <div class="hero-extra mt-4 {{ $showImage ? '' : 'd-flex justify-content-center flex-wrap gap-4' }}">{{ $slot }}</div>
                @endisset
            </div>
            @if ($showImage)
            <div class="col-lg-6">
                <div class="hero-image-wrap">
                    @if ($image)
                        <img src="{{ $image }}" alt="" class="hero-image" loading="eager" width="726" height="469">
                    @else
                        <div class="hero-visual-panel">
                            <i class="bi bi-shield-check"></i>
                            <p>{{ config('site.tagline') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
