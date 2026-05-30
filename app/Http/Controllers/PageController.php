<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', $this->meta(
            'Secure Your Future | Chirag Investcare Finserv LLP',
            'Welcome to Chirag Investcare Finserv LLP. Be rest assured that your wealth is managed with thoughtful planning to protect what matters most.',
            'home'
        ));
    }

    public function aboutUs(): View
    {
        return view('pages.about-us', $this->meta(
            'About Us | Chirag Investcare Finserv LLP',
            'Learn about our philosophy, leadership, and mission. Financial planning built on trust since 1990.',
            'about-us'
        ));
    }

    public function ourServices(): View
    {
        return view('pages.our-services', $this->meta(
            'Our Services | Chirag Investcare Finserv LLP',
            'Comprehensive wealth and protection solutions — mutual funds, PMS, insurance, NRI investments, and estate planning.',
            'our-services'
        ));
    }

    public function ourApproach(): View
    {
        return view('pages.our-approach', $this->meta(
            'Our Approach | Chirag Investcare Finserv LLP',
            'How we work with you — understand, design, implement, and monitor your financial plan.',
            'our-approach'
        ));
    }

    public function contact(): View
    {
        return view('pages.contact', $this->meta(
            'Contact Us | Chirag Investcare Finserv LLP',
            'Be rest assured — let\'s secure your future together. Contact Chirag Investcare Finserv LLP in Vadodara.',
            'contact'
        ));
    }

    public function login(): View
    {
        return view('pages.login', $this->meta(
            'Investor Login | Chirag Investcare Finserv LLP',
            'Secure investor login portal for Chirag Investcare Finserv LLP clients.',
            'login'
        ));
    }

    /**
     * @return array<string, mixed>
     */
    private function meta(string $title, string $description, string $page): array
    {
        return [
            'metaTitle' => $title,
            'metaDescription' => $description,
            'currentPage' => $page,
            'ogImage' => asset(config('site.logo')),
        ];
    }
}
