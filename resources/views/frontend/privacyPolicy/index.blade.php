@extends('layouts.landing.main')
@section('title', 'Privacy Policy - Voger LLC')
@section('content')

<style>
    .policy-hero {
        background: var(--background-color);
        padding: 100px 0 80px;
        position: relative;
        overflow: hidden;
    }

    .policy-hero::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        height: 60px;
        background: #f8f9fa;
        clip-path: ellipse(55% 100% at 50% 100%);
    }

    .policy-hero h1 {
        font-size: 3rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
    }

    .policy-hero p {
        font-size: 1.1rem;
        color: rgba(255,255,255,0.85);
        max-width: 100%;
    }

    .policy-badge {
        display: inline-block;
        background: rgba(255,255,255,0.15);
        color: #fff;
        padding: 6px 18px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 20px;
        border: 1px solid rgba(255,255,255,0.3);
    }

    .policy-body {
        background: #f8f9fa;
        padding: 80px 0;
    }

    .policy-card {
        background: #fff;
        border-radius: 20px;
        padding: 35px;
        height: 100%;
        border: 1px solid #eee;
        transition: 0.35s ease;
        position: relative;
        overflow: hidden;
    }

    .policy-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: #c1121f;
        border-radius: 4px 0 0 4px;
        transform: scaleY(0);
        transform-origin: top;
        transition: 0.35s ease;
    }

    .policy-card:hover {
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        transform: translateY(-5px);
        border-color: transparent;
    }

    .policy-card:hover::before {
        transform: scaleY(1);
    }

    .policy-card-icon {
        width: 54px;
        height: 54px;
        background: rgba(193,18,31,0.08);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: #c1121f;
        margin-bottom: 20px;
        transition: 0.3s;
    }

    .policy-card:hover .policy-card-icon {
        background: #c1121f;
        color: #fff;
    }

    .policy-card h4 {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 12px;
    }

    .policy-card p {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.75;
        margin-bottom: 0;
    }

    .policy-cta {
        background: linear-gradient(135deg, #c1121f, #780000);
        padding: 60px 0;
        text-align: center;
        color: #fff;
    }

    .policy-cta h3 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: white;
    }

    .policy-cta a {
        display: inline-block;
        background: #fff;
        color: #c1121f;
        padding: 12px 35px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        transition: 0.3s;
        margin-top: 10px;
    }

    .policy-cta a:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
</style>

<!-- Hero Banner -->
<section class="policy-hero hero section dark-background">
    <div class="container position-relative" data-aos="fade-up">
        <span class="policy-badge">
            <i class="bi bi-shield-lock me-1"></i> Legal & Privacy
        </span>
        <h1>Privacy Policy</h1>
        <p>Your privacy is fundamental to how we operate. This document outlines the principles and practices governing how Voger LLC collects, uses, and protects your personal information across all our services.</p>
        <!-- <p class="mt-2 small" style="color:rgba(255,255,255,0.6);">Last Updated: May 2025</p> -->
    </div>
</section>

<!-- Policy Cards Section -->
<section class="policy-body">
    <div class="container">

        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold" style="font-size:2rem; color:#1a1a2e;">Our Privacy Commitments</h2>
            <p class="text-muted mt-2" style="max-width:600px; margin:auto;">We take a transparent and responsible approach to the data we handle. Below is a breakdown of every key aspect of our Privacy Policy.</p>
        </div>

        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-collection-fill"></i>
                    </div>
                    <h4>1. Information We Collect</h4>
                    <p>When you engage with our services, we may gather identifying details such as your full name, residential address, contact number, email address, and billing information. This data is collected solely to facilitate accurate service delivery, account management, and secure transaction processing.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-bar-chart-line-fill"></i>
                    </div>
                    <h4>2. How We Use Your Data</h4>
                    <p>Your information is utilized to activate and manage services, process bill payments, troubleshoot technical disruptions, and deliver responsive customer care. We strictly limit data usage to operational purposes and never leverage your information for unsolicited promotional activities.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                    <h4>3. Data Security & Protection</h4>
                    <p>We employ enterprise-grade security protocols including end-to-end encryption, role-based access controls, and continuous threat monitoring to safeguard your personal data. Our infrastructure is designed to prevent unauthorized access, data loss, and any form of breach.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-share-fill"></i>
                    </div>
                    <h4>4. Third-Party Disclosure</h4>
                    <p>Voger LLC does not sell, trade, or lease your personal data. Selective sharing occurs only with certified operational partners—such as billing systems or technical support platforms—and is governed by strict non-disclosure and confidentiality agreements to ensure your data remains protected.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-browser-chrome"></i>
                    </div>
                    <h4>5. Cookies & Tracking</h4>
                    <p>To optimize your browsing experience, we utilize essential cookies that retain session data, login credentials, and user preferences. These are functional in nature and do not track behavior for advertising purposes. You retain full control over cookie settings via your browser preferences.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="350">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-arrow-repeat"></i>
                    </div>
                    <h4>6. Policy Revisions</h4>
                    <p>As our services evolve, this Privacy Policy may be updated to reflect new practices or legal requirements. Any material revisions will be communicated proactively via website notices or direct correspondence, ensuring you remain fully informed at all times.</p>
                </div>
            </div>

            <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h4>7. Reach Out to Our Privacy Team</h4>
                    <p>For any questions, data access requests, or concerns regarding how your personal information is handled, we encourage you to reach out to our dedicated privacy team. We are committed to addressing your inquiries with transparency, care, and urgency. Contact us at <strong>sales@vogerllc.com</strong> or call <strong>(833) 536-7944</strong>.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="policy-cta">
    <div class="container" data-aos="zoom-in">
        <h3>Questions About Your Privacy?</h3>
        <p style="color:rgba(255,255,255,0.85); font-size:1rem;">Our team is available around the clock to clarify any concerns regarding your personal data.</p>
        <a href="{{ route('welcome') }}#contact">
            <i class="bi bi-envelope-fill me-2"></i> Contact Us
        </a>
    </div>
</section>

@endsection