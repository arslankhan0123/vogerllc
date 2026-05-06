@extends('layouts.landing.main')
@section('title', 'Refund Policy - Voger LLC')
@section('content')

<style>
    .policy-hero {
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

    .policy-card p,
    .policy-card ul {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.75;
        margin-bottom: 0;
    }

    .policy-card ul {
        padding-left: 1.2rem;
    }

    .policy-card ul li {
        margin-bottom: 6px;
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
            <i class="bi bi-arrow-counterclockwise me-1"></i> Refunds & Billing
        </span>
        <h1>Refund Policy</h1>
        <p>We are committed to fair and transparent billing practices. This policy defines the specific conditions under which refunds are considered and the process for submitting a valid request.</p>
        <!-- <p class="mt-2 small" style="color:rgba(255,255,255,0.6);">Last Updated: May 2025</p> -->
    </div>
</section>

<!-- Policy Cards Section -->
<section class="policy-body">
    <div class="container">

        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold" style="font-size:2rem; color:#1a1a2e;">Our Refund Framework</h2>
            <p class="text-muted mt-2" style="max-width:600px; margin:auto;">Transparency is at the core of our billing practices. Below is a full breakdown of our refund eligibility criteria and procedures.</p>
        </div>

        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-info-circle-fill"></i>
                    </div>
                    <h4>1. General Refund Stance</h4>
                    <p>Voger LLC is dedicated to delivering a seamless experience for every customer. Given the nature of our digital and utility services—including TV, internet, mobile plans, and bill payments—transactions are generally considered final once successfully processed. Refunds are evaluated on a case-by-case basis under specific qualifying circumstances.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-check2-square"></i>
                    </div>
                    <h4>2. Qualifying Refund Conditions</h4>
                    <p>A refund request may be reviewed and approved only under the following circumstances:</p>
                    <ul>
                        <li>Duplicate or unintentional double-charges on your account</li>
                        <li>System-level or technical failures that prevented service from being delivered</li>
                        <li>Billing for a service that was never requested, activated, or rendered</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-x-circle-fill"></i>
                    </div>
                    <h4>3. Non-Refundable Transactions</h4>
                    <p>The following categories of services are strictly non-refundable once rendered or activated:</p>
                    <ul>
                        <li>Completed utility and telecom bill payments forwarded to providers</li>
                        <li>Activated prepaid mobile plans or recharge top-ups</li>
                        <li>Any service that has been fully or partially processed and delivered</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-send-fill"></i>
                    </div>
                    <h4>4. Submitting a Refund Request</h4>
                    <p>To initiate a refund review, contact our support team within <strong>48 hours</strong> of the transaction in question. Please have the following details ready: your full legal name, the service involved, the transaction reference ID, and a clear explanation of the issue. Requests that fail to meet the eligibility criteria outlined above may be declined.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h4>5. Refund Processing Timeline</h4>
                    <p>Upon approval of a refund request, the reimbursement will be processed within <strong>7 to 10 business days</strong>. The refunded amount will be returned exclusively to the original payment method used at the time of the transaction. Processing timelines may vary depending on your financial institution.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="350">
                <div class="policy-card">
                    <div class="policy-card-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h4>6. Contact Our Billing Support</h4>
                    <p>If you believe an incorrect charge has been applied to your account or require assistance navigating a billing dispute, our dedicated support team is ready to assist. Please reach out via phone at <strong>(833) 536-7944</strong> or email us at <strong>sales@vogerllc.com</strong>. We aim to resolve all billing concerns professionally and promptly.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="policy-cta">
    <div class="container" data-aos="zoom-in">
        <h3>Need Help with a Refund?</h3>
        <p style="color:rgba(255,255,255,0.85); font-size:1rem;">Our billing team is available around the clock to help review and resolve your concerns.</p>
        <a href="{{ route('welcome') }}#contact">
            <i class="bi bi-envelope-fill me-2"></i> Get in Touch
        </a>
    </div>
</section>

@endsection