@extends('layouts.landing.main')
@section('title', 'Terms & Conditions - Voger LLC')
@section('content')
<style>
    .policy-hero { padding: 100px 0 80px; position: relative; overflow: hidden; }
    .policy-hero::after { content: ''; position: absolute; bottom: -2px; left: 0; right: 0; height: 60px; background: #f8f9fa; clip-path: ellipse(55% 100% at 50% 100%); }
    .policy-hero h1 { font-size: 3rem; font-weight: 800; color: #fff; margin-bottom: 20px; }
    .policy-hero p { font-size: 1.1rem; color: rgba(255,255,255,0.85); max-width: 100%; }
    .policy-badge { display: inline-block; background: rgba(255,255,255,0.15); color: #fff; padding: 6px 18px; border-radius: 50px; font-size: 0.85rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.3); }
    .policy-body { background: #f8f9fa; padding: 80px 0; }
    .policy-card { background: #fff; border-radius: 20px; padding: 35px; height: 100%; border: 1px solid #eee; transition: 0.35s ease; position: relative; overflow: hidden; }
    .policy-card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #c1121f; border-radius: 4px 0 0 4px; transform: scaleY(0); transform-origin: top; transition: 0.35s ease; }
    .policy-card:hover { box-shadow: 0 15px 40px rgba(0,0,0,0.08); transform: translateY(-5px); border-color: transparent; }
    .policy-card:hover::before { transform: scaleY(1); }
    .policy-card-icon { width: 54px; height: 54px; background: rgba(193,18,31,0.08); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #c1121f; margin-bottom: 20px; transition: 0.3s; }
    .policy-card:hover .policy-card-icon { background: #c1121f; color: #fff; }
    .policy-card h4 { font-size: 1.1rem; font-weight: 700; color: #1a1a2e; margin-bottom: 12px; }
    .policy-card p, .policy-card ul { font-size: 0.95rem; color: #666; line-height: 1.75; margin-bottom: 0; }
    .policy-card ul { padding-left: 1.2rem; }
    .policy-card ul li { margin-bottom: 6px; }
    .policy-cta { background: linear-gradient(135deg, #c1121f, #780000); padding: 60px 0; text-align: center; color: #fff; }
    .policy-cta h3 { font-size: 1.8rem; font-weight: 700; margin-bottom: 15px; color: white; }
    .policy-cta a { display: inline-block; background: #fff; color: #c1121f; padding: 12px 35px; border-radius: 50px; font-weight: 700; text-decoration: none; transition: 0.3s; margin-top: 10px; }
    .policy-cta a:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
</style>

<section class="policy-hero hero section dark-background">
    <div class="container position-relative" data-aos="fade-up">
        <span class="policy-badge"><i class="bi bi-file-text me-1"></i> Terms & Conditions</span>
        <h1>Terms &amp; Conditions</h1>
        <p>By accessing or using any of Voger LLC's services, you agree to be bound by the terms outlined below. These terms govern your use of our digital and utility service offerings and define the rights and responsibilities of both parties.</p>
        <!-- <p class="mt-2 small" style="color:rgba(255,255,255,0.6);">Last Updated: May 2025</p> -->
    </div>
</section>

<section class="policy-body">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold" style="font-size:2rem; color:#1a1a2e;">Our Service Agreement</h2>
            <p class="text-muted mt-2" style="max-width:620px; margin:auto;">These terms have been designed to ensure a fair, secure, and transparent experience for every Voger LLC customer. Please review each section carefully before using our platform.</p>
        </div>
        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-person-check-fill"></i></div>
                    <h4>1. Eligibility Requirements</h4>
                    <p>To access and use our services, you must satisfy the following conditions:</p>
                    <ul>
                        <li>Be a minimum of 18 years of age at the time of engagement.</li>
                        <li>Possess the full legal capacity to enter into a binding contractual agreement.</li>
                        <li>Provide accurate, current, and verifiable registration and contact details.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-credit-card-2-front-fill"></i></div>
                    <h4>2. Payment Processing Standards</h4>
                    <p>All transactions conducted through Voger LLC are governed by the following standards:</p>
                    <ul>
                        <li>Payments are routed exclusively through verified and encrypted payment gateways.</li>
                        <li>Transactions may be subject to security holds or verification checks prior to completion.</li>
                        <li>We reserve the right to decline or flag any transaction deemed irregular or suspicious.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-arrow-counterclockwise"></i></div>
                    <h4>3. Refund Eligibility</h4>
                    <p>All service payments are considered final upon processing. Exceptions are made only under the following conditions:</p>
                    <ul>
                        <li>An erroneous or duplicate charge is verified by our billing team.</li>
                        <li>A technical failure on our end prevents successful service delivery.</li>
                    </ul>
                    <p class="mt-2">To initiate a refund review, please contact our support team within 48 hours of the transaction.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-pencil-square"></i></div>
                    <h4>4. Amendments to Terms</h4>
                    <p>Voger LLC reserves the right to revise or update these Terms &amp; Conditions at any time without prior notice. All amendments will be communicated through official website announcements. Your continued use of our services following any update constitutes your acceptance of the revised terms.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-slash-circle-fill"></i></div>
                    <h4>5. Limitation of Liability</h4>
                    <p>By engaging with our services, you acknowledge and accept the following limitations:</p>
                    <ul>
                        <li>Voger LLC is not accountable for outages or disruptions caused by third-party service providers.</li>
                        <li>We bear no liability for processing delays attributable to carrier-side or platform-level technical issues.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="350">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-hammer"></i></div>
                    <h4>6. Dispute Resolution</h4>
                    <p>In the event of a disagreement arising from the use of our services, the following process shall apply:</p>
                    <ul>
                        <li>All disputes will be subject to resolution through formal binding arbitration.</li>
                        <li>Arbitration proceedings will take place within our registered business jurisdiction.</li>
                        <li>We are committed to pursuing amicable resolution before escalating to formal legal proceedings.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-bank2"></i></div>
                    <h4>7. Regulatory Compliance</h4>
                    <p>You agree to engage with our services in full compliance with all applicable laws and regulations, which includes:</p>
                    <ul>
                        <li>Refraining from using our platform for any unlawful, deceptive, or fraudulent activity.</li>
                        <li>Adhering to all relevant tax obligations and financial regulations in your jurisdiction.</li>
                        <li>Respecting intellectual property rights and the proprietary interests of third parties.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="450">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-shield-lock-fill"></i></div>
                    <h4>8. Privacy Commitment</h4>
                    <p>Your personal data is handled in strict accordance with our <a href="{{ route('privacyPolicy') }}" class="text-danger fw-bold">Privacy Policy</a>, which is incorporated herein by reference. Key principles include:</p>
                    <ul>
                        <li>Data collection is limited to information strictly necessary for service fulfilment.</li>
                        <li>All stored data is protected using enterprise-grade security protocols and is never sold to third parties.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="policy-cta">
    <div class="container" data-aos="zoom-in">
        <h3>Questions About Our Terms?</h3>
        <p style="color:rgba(255,255,255,0.85); font-size:1rem;">Our team is happy to walk you through any aspect of our service agreement.</p>
        <a href="{{ route('welcome') }}#contact"><i class="bi bi-envelope-fill me-2"></i> Get in Touch</a>
    </div>
</section>
@endsection
