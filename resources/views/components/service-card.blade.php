@props([
    'title',
    'description',
    'icon' => 'bi-telephone',
    'image' => null,
    'url' => '#',
    'linkText' => 'Learn more',
])

<div class="service-card h-100">
    @if ($image)
        <div class="service-card-image">
            <img src="{{ $image }}" alt="{{ $title }}" loading="lazy">
        </div>
    @else
        <div class="service-card-icon">
            <i class="bi {{ $icon }}"></i>
        </div>
    @endif
    <div class="service-card-body">
        <h3 class="service-card-title">{{ $title }}</h3>
        <p class="service-card-text">{{ $description }}</p>
        <a href="{{ $url }}" class="service-card-link">{{ $linkText }} <i class="bi bi-arrow-right"></i></a>
    </div>
</div>
