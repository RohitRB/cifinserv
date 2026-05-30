<footer class="site-footer">
    <div class="footer-main">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}" class="footer-logo mb-3" width="200">
                    <p class="footer-about">Since {{ config('site.since') }}, Chirag Investcare Finserv LLP has helped families across India with thoughtful financial planning — so you can be rest assured about your future.</p>
                    <div class="footer-social">
                        <a href="{{ config('site.social.facebook') }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="{{ config('site.social.linkedin') }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('our-services') }}">Our Services</a></li>
                        <li><a href="{{ route('our-approach') }}">Our Approach</a></li>
                        <li><a href="{{ route('login') }}">Investor Login</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <h3 class="footer-heading">Contact</h3>
                    <ul class="footer-contact">
                        <li><i class="bi bi-telephone"></i> <a href="tel:{{ config('site.phone_tel') }}">{{ config('site.phone') }}</a></li>
                        <li><i class="bi bi-envelope"></i> <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></li>
                        <li><i class="bi bi-geo-alt"></i> {{ config('site.address') }}</li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-3">
                    <h3 class="footer-heading">Business Hours</h3>
                    <p class="footer-hours">{{ config('site.business_hours') }}</p>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-sm mt-2">Contact Us</a>
                </div>
            </div>

            <div class="footer-compliance">
                <p>Mutual Fund investments are subject to market risks, read all scheme-related documents carefully. Chirag Investcare Finserv LLP is an AMFI Registered Mutual Fund Distributor. The information provided on this website is for educational purposes and should not be construed as guaranteed investment advice.</p>
                <div class="footer-registrations">
                    <p>AMFI Registered Mutual Funds Distributor | ARN-{{ config('site.amfi_mf.arn') }} | Initial Registration: {{ config('site.amfi_mf.initial') }} | Validity: {{ config('site.amfi_mf.validity') }}</p>
                    <p>AMFI Registered SIF Distributor | ARN – {{ config('site.amfi_sif.arn') }} | Initial Registration: {{ config('site.amfi_sif.initial') }} | Validity: {{ config('site.amfi_sif.validity') }}</p>
                    <p>BSE StAR MF Member Code: {{ config('site.bse_mf_code') }} | NSE MF Member Code: {{ config('site.nse_mf_code') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-xl">
            <p>&copy; {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
