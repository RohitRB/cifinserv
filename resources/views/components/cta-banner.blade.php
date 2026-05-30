@props([
    'title' => 'Be Rest Assured — Let\'s Secure Your Future Together',
    'phone' => null,
    'buttonText' => 'Contact Us Today',
    'buttonUrl' => null,
    'variant' => 'primary',
])

@php
    $phone = $phone ?? config('site.phone');
    $buttonUrl = $buttonUrl ?? route('contact');
@endphp

<section class="cta-banner cta-banner-{{ $variant }}">
    <div class="container-xl">
        <div class="cta-banner-inner text-center">
            <h2 class="cta-banner-title">{{ $title }}</h2>
            <a href="tel:{{ config('site.phone_tel') }}" class="cta-banner-phone">{{ $phone }}</a>
            <div class="mt-3">
                <a href="{{ $buttonUrl }}" class="btn btn-light btn-lg">{{ $buttonText }}</a>
            </div>
        </div>
    </div>
</section>
