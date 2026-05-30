<div class="floating-cta" id="floating-cta">
    <div class="floating-cta-inner">
        <p class="floating-cta-title">Need Assistance?</p>
        <a href="tel:{{ config('site.phone_tel') }}" class="floating-cta-phone">
            <i class="bi bi-telephone-fill"></i> {{ config('site.phone') }}
        </a>
        <a href="{{ route('contact') }}" class="floating-cta-link">Contact us today</a>
    </div>
</div>
