@php
    $nav = [
        ['label' => 'Home', 'route' => 'home', 'slug' => 'home'],
        ['label' => 'About Us', 'route' => 'about-us', 'slug' => 'about-us'],
        ['label' => 'Our Services', 'route' => 'our-services', 'slug' => 'our-services'],
        ['label' => 'Our Approach', 'route' => 'our-approach', 'slug' => 'our-approach'],
        ['label' => 'Contact', 'route' => 'contact', 'slug' => 'contact'],
    ];
@endphp

<header class="site-header" id="site-header">
    <div class="top-bar">
        <div class="container-xl">
            <div class="top-bar-inner">
                <span class="top-bar-text"><i class="bi bi-clock"></i> {{ config('site.business_hours') }}</span>
                <a href="tel:{{ config('site.phone_tel') }}" class="top-bar-phone">
                    <i class="bi bi-telephone-fill"></i> {{ config('site.phone') }}
                </a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg main-nav" aria-label="Main navigation">
        <div class="container-xl">
            <a class="navbar-brand brand-logo-wrap" href="{{ route('home') }}">
                <img src="{{ asset(config('site.logo')) }}"
                     alt="{{ config('site.name') }} Logo"
                     width="220"
                     height="60"
                     class="brand-logo">
                <span class="brand-tagline">{{ config('site.tagline') }}</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    @foreach ($nav as $item)
                        <li class="nav-item">
                            <a class="nav-link {{ ($currentPage ?? '') === $item['slug'] ? 'active' : '' }}"
                               href="{{ route($item['route']) }}"
                               @if(($currentPage ?? '') === $item['slug']) aria-current="page" @endif>
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary btn-nav-cta" href="{{ route('login') }}">Investor Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
