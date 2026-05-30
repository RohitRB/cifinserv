<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $metaTitle ?? config('site.name') }}</title>
    <meta name="description" content="{{ $metaDescription ?? config('site.tagline') }}">
    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $metaTitle ?? config('site.name') }}">
    <meta property="og:description" content="{{ $metaDescription ?? config('site.tagline') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ config('site.name') }}">
    <meta property="og:image" content="{{ $ogImage ?? asset(config('site.logo')) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTitle ?? config('site.name') }}">
    <meta name="twitter:description" content="{{ $metaDescription ?? config('site.tagline') }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset(config('site.logo')) }}">

    <link rel="icon" href="{{ asset(config('site.logo')) }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @stack('styles')
</head>
<body class="site-body page-{{ $currentPage ?? 'default' }}">
    <a class="skip-link" href="#main-content">Skip to content</a>

    <x-header :current-page="$currentPage ?? ''" />

    <main id="main-content">
        @yield('content')
    </main>

    <x-footer />

    <x-cta-floating />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
