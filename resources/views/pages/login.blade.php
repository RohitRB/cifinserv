@extends('layouts.app')

@section('content')

<x-hero
    variant="page"
    title="Investor Login"
    subtitle="Secure access for existing Chirag Investcare Finserv LLP investors."
    :show-image="false"
/>

<section class="section section-light">
    <div class="container-xl">
        <div class="login-card">
            <h2 class="section-title text-center h4">Sign In</h2>
            <p class="text-center text-muted mb-4">This portal is for registered investors. Contact us if you need access.</p>
            <form action="#" method="post">
                @csrf
                <div class="mb-3">
                    <label for="login_email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="login_email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="login_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="login_password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-3 mb-0 small">
                Need help? <a href="{{ route('contact') }}">Contact us</a>
            </p>
        </div>
    </div>
</section>

@endsection
