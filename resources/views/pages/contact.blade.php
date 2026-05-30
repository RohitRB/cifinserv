@extends('layouts.app')

@section('content')

<x-hero
    variant="page"
    title="Be Rest Assured — Let's Secure Your Future Together"
    subtitle="Get in touch with our team in Vadodara to discuss your financial goals."
    cta-text="Call {{ config('site.phone') }}"
    :cta-url="'tel:' . config('site.phone_tel')"
    secondary-cta-text="Email us"
    :secondary-cta-url="'mailto:' . config('site.email')"
    :show-image="false"
/>

<section class="section section-light">
    <div class="container-xl">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="contact-info-box">
                    <i class="bi bi-telephone-fill"></i>
                    <h3>Phone</h3>
                    <p><a href="tel:{{ config('site.phone_tel') }}">{{ config('site.phone') }}</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-box">
                    <i class="bi bi-envelope-fill"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-box">
                    <i class="bi bi-geo-alt-fill"></i>
                    <h3>Office</h3>
                    <p>{{ config('site.address') }}</p>
                    <p>{{ config('site.business_hours') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<x-contact-form :show-map="true" heading="Submit Inquiry" subheading="Fill out the form below and our team will get back to you." />

<x-cta-banner variant="dark" />
@endsection
