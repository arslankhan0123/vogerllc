@extends('layouts.landing.main')
@section('title', $service->title . ' - Voger LLC')
@section('content')

<style>
    .policy-hero { padding: 100px 0 80px; position: relative; overflow: hidden; }
    .policy-hero::after { content: ''; position: absolute; bottom: -2px; left: 0; right: 0; height: 60px; background: #f8f9fa; clip-path: ellipse(55% 100% at 50% 100%); }
    .policy-hero h1 { font-size: 2.8rem; font-weight: 800; color: #fff; margin-bottom: 20px; line-height: 1.25; }
    .policy-hero p { font-size: 1.05rem; color: rgba(255,255,255,0.85); max-width: 650px; }
    .policy-badge { display: inline-block; background: rgba(255,255,255,0.15); color: #fff; padding: 6px 18px; border-radius: 50px; font-size: 0.85rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.3); }

    .service-body { background: #f8f9fa; padding: 80px 0; }

    /* Main Content Card */
    .service-main-card { background: #fff; border-radius: 24px; padding: 45px; border: 1px solid #eee; position: relative; overflow: hidden; }
    .service-main-card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #c1121f, #780000); }
    .service-main-card h2 { font-size: 1.9rem; font-weight: 800; color: #1a1a2e; margin-bottom: 15px; }
    .service-main-card .short-desc { font-size: 1.05rem; color: #555; line-height: 1.8; border-left: 4px solid #c1121f; padding-left: 18px; margin-bottom: 28px; background: rgba(193,18,31,0.04); padding: 14px 18px; border-radius: 0 10px 10px 0; }
    .service-main-card .long-desc { font-size: 0.97rem; color: #666; line-height: 1.9; }

    /* Price Badge */
    .price-badge { display: inline-flex; align-items: center; gap: 10px; background: linear-gradient(135deg, #c1121f, #780000); color: #fff; padding: 14px 30px; border-radius: 50px; font-size: 1.3rem; font-weight: 800; margin-top: 28px; box-shadow: 0 8px 20px rgba(193,18,31,0.3); }
    .price-badge i { font-size: 1.1rem; }

    /* Sidebar Cards */
    .sidebar-card { background: #fff; border-radius: 20px; padding: 30px; border: 1px solid #eee; margin-bottom: 24px; transition: 0.3s ease; }
    .sidebar-card:hover { box-shadow: 0 12px 30px rgba(0,0,0,0.07); transform: translateY(-3px); }
    .sidebar-card h5 { font-size: 1rem; font-weight: 700; color: #1a1a2e; margin-bottom: 15px; display: flex; align-items: center; gap: 10px; }
    .sidebar-card h5 i { color: #c1121f; font-size: 1.1rem; }

    /* Feature Pills */
    .feature-pill { display: inline-flex; align-items: center; gap: 8px; background: rgba(193,18,31,0.07); color: #c1121f; padding: 8px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 600; margin: 5px 4px; border: 1px solid rgba(193,18,31,0.15); }
    .feature-pill i { font-size: 0.8rem; }

    /* CTA Sidebar */
    .cta-sidebar { background: linear-gradient(135deg, #c1121f, #780000); border-radius: 20px; padding: 30px; color: #fff; text-align: center; }
    .cta-sidebar h5 { font-size: 1.15rem; font-weight: 700; margin-bottom: 12px; color: white; }
    .cta-sidebar p { font-size: 0.9rem; color: rgba(255,255,255,0.85); margin-bottom: 20px; }
    .cta-sidebar a { display: block; background: #fff; color: #c1121f; padding: 12px 20px; border-radius: 50px; font-weight: 700; text-decoration: none; transition: 0.3s; font-size: 0.95rem; }
    .cta-sidebar a:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,0,0,0.15); }
    .cta-sidebar .divider { border-color: rgba(255,255,255,0.2); margin: 18px 0; }

    /* Back link */
    .back-link { display: inline-flex; align-items: center; gap: 8px; color: #c1121f; font-weight: 600; text-decoration: none; margin-bottom: 30px; transition: 0.2s; font-size: 0.95rem; }
    .back-link:hover { gap: 12px; color: #780000; }

    /* Bottom CTA */
    .policy-cta { background: linear-gradient(135deg, #c1121f, #780000); padding: 60px 0; text-align: center; color: #fff; }
    .policy-cta h3 { font-size: 1.8rem; font-weight: 700; margin-bottom: 15px; color: white; }
    .policy-cta a { display: inline-block; background: #fff; color: #c1121f; padding: 12px 35px; border-radius: 50px; font-weight: 700; text-decoration: none; transition: 0.3s; margin-top: 10px; }
    .policy-cta a:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
</style>

<!-- Hero Banner -->
<section class="policy-hero hero section dark-background">
    <div class="container position-relative" data-aos="fade-up">
        <span class="policy-badge">
            <i class="bi bi-lightning-fill me-1"></i> Voger LLC Service
        </span>
        <h1>{{ $service->title }}</h1>
        <p>Discover everything Voger LLC offers through this service. Reliable, affordable, and built to elevate your digital lifestyle.</p>
        <p class="mt-3">
            <a href="{{ route('welcome') }}#services" class="btn btn-outline-light rounded-pill px-4 py-2 me-2">
                <i class="bi bi-grid me-1"></i> All Services
            </a>
            <a href="{{ route('welcome') }}#contact" class="btn rounded-pill px-4 py-2" style="background:#fff; color:#c1121f; font-weight:700;">
                <i class="bi bi-telephone-fill me-1"></i> Get Started
            </a>
        </p>
    </div>
</section>

<!-- Service Detail Body -->
<section class="service-body">
    <div class="container">

        <a href="{{ route('welcome') }}#services" class="back-link" data-aos="fade-right">
            <i class="bi bi-arrow-left-circle-fill"></i> Back to All Services
        </a>

        <div class="row g-4">

            <!-- Main Content -->
            <div class="col-lg-8" data-aos="fade-up">
                <div class="service-main-card">
                    <h2>{{ $service->title }}</h2>

                    <div class="short-desc">
                        {!! $service->short_description !!}
                    </div>

                    <div class="long-desc">
                        {!! $service->long_description !!}
                    </div>

                    @if($service->price)
                    <div class="price-badge">
                        <i class="bi bi-tag-fill"></i>
                        Starting at {{ $service->price }}
                    </div>
                    @endif
                </div>

                <!-- Features Row -->
                <div class="sidebar-card mt-4" data-aos="fade-up" data-aos-delay="100">
                    <h5><i class="bi bi-stars"></i> Why Choose This Service</h5>
                    <div>
                        <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Trusted Provider</span>
                        <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Transparent Pricing</span>
                        <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> 24/7 Support</span>
                        <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Fast Activation</span>
                        <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> No Hidden Fees</span>
                        <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Secure Transactions</span>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">

                <!-- Quick Contact CTA -->
                <div class="cta-sidebar mb-4">
                    <h5><i class="bi bi-headset me-2"></i>Ready to Get Started?</h5>
                    <p>Speak with a Voger LLC specialist today for a personalized quote and instant activation.</p>
                    <a href="tel:+18336217696">
                        <i class="bi bi-telephone-fill me-2"></i> (833) 621-7696
                    </a>
                    <hr class="divider">
                    <a href="{{ route('welcome') }}#contact">
                        <i class="bi bi-envelope-fill me-2"></i> Send a Message
                    </a>
                </div>

                <!-- Service Info Card -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-info-circle-fill"></i> Service Details</h5>
                    <ul class="list-unstyled mb-0" style="font-size:0.92rem; color:#555; line-height:2;">
                        <li><i class="bi bi-dot text-danger fs-5"></i> <strong>Service:</strong> {{ $service->title }}</li>
                        @if($service->price)
                        <li><i class="bi bi-dot text-danger fs-5"></i> <strong>Price:</strong> {{ $service->price }}</li>
                        @endif
                        <li><i class="bi bi-dot text-danger fs-5"></i> <strong>Activation:</strong> Fast & Instant</li>
                        <li><i class="bi bi-dot text-danger fs-5"></i> <strong>Support:</strong> 24/7 Available</li>
                        <li><i class="bi bi-dot text-danger fs-5"></i> <strong>Billing:</strong> Transparent & Secure</li>
                    </ul>
                </div>

                <!-- Office Info Card -->
                <div class="sidebar-card">
                    <h5><i class="bi bi-geo-alt-fill"></i> Our Office</h5>
                    <p style="font-size:0.9rem; color:#666; line-height:1.8; margin-bottom:10px;">
                        7811 5th Ave #33<br>Brooklyn, NY 11209
                    </p>
                    <p style="font-size:0.9rem; color:#666; margin-bottom:5px;">
                        <i class="bi bi-envelope text-danger me-1"></i> sales@vogerllc.com
                    </p>
                    <p style="font-size:0.9rem; color:#666; margin-bottom:0;">
                        <i class="bi bi-telephone text-danger me-1"></i> (833) 621-7696
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="policy-cta">
    <div class="container" data-aos="zoom-in">
        <h3>Interested in {{ $service->title }}?</h3>
        <p style="color:rgba(255,255,255,0.85); font-size:1rem;">Our team is standing by to help you activate and configure the perfect plan.</p>
        <a href="{{ route('welcome') }}#contact">
            <i class="bi bi-arrow-right-circle-fill me-2"></i> Contact Us Now
        </a>
    </div>
</section>

@endsection