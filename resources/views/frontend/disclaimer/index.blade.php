@extends('layouts.landing.main')
@section('title', 'Disclaimer - Voger LLC')
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
    .policy-card p { font-size: 0.95rem; color: #666; line-height: 1.75; margin-bottom: 0; }
    .policy-cta { background: linear-gradient(135deg, #c1121f, #780000); padding: 60px 0; text-align: center; color: #fff; }
    .policy-cta h3 { font-size: 1.8rem; font-weight: 700; margin-bottom: 15px; color: white; }
    .policy-cta a { display: inline-block; background: #fff; color: #c1121f; padding: 12px 35px; border-radius: 50px; font-weight: 700; text-decoration: none; transition: 0.3s; margin-top: 10px; }
    .policy-cta a:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
</style>

<section class="policy-hero hero section dark-background">
    <div class="container position-relative" data-aos="fade-up">
        <span class="policy-badge"><i class="bi bi-exclamation-triangle me-1"></i> Legal Notice</span>
        <h1>Disclaimer</h1>
        <p>Voger LLC operates as an independent third-party service facilitator. We are not affiliated with or acting on behalf of any official telecommunications or utility provider. All brand names and trademarks referenced belong to their respective owners.</p>
        <!-- <p class="mt-2 small" style="color:rgba(255,255,255,0.6);">Last Updated: May 2025</p> -->
    </div>
</section>

<section class="policy-body">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold" style="font-size:2rem; color:#1a1a2e;">Important Disclosures</h2>
            <p class="text-muted mt-2" style="max-width:600px; margin:auto;">Please read the following disclosures carefully to understand the scope and limitations of the services and information provided by Voger LLC.</p>
        </div>
        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                    <h4>1. General Informational Purpose</h4>
                    <p>All content published on this website is intended strictly for general informational purposes concerning our service offerings. Content is provided in good faith to assist users in understanding available options and is not a guarantee of specific service outcomes.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-building"></i></div>
                    <h4>2. Independent Service Facilitator</h4>
                    <p>Voger LLC functions entirely as an independent facilitator and is not affiliated with, sponsored by, or in any official partnership with any telecom carrier or utility company. Any brand names cited are used for descriptive identification purposes only and remain the property of their respective owners.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-patch-check-fill"></i></div>
                    <h4>3. Accuracy of Published Information</h4>
                    <p>While we invest considerable effort in ensuring all information remains current and accurate, we do not warrant the precision or completeness of any content. Service details, pricing, and availability are subject to change. Reliance on published information is undertaken at your own discretion and risk.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-shield-exclamation"></i></div>
                    <h4>4. No Guarantee of Service Outcomes</h4>
                    <p>Reaching out to Voger LLC does not constitute a guarantee of successful service activation, payment resolution, or technical support delivery. All final service decisions remain subject to the policies, capacity, and discretion of the originating providers involved.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-link-45deg"></i></div>
                    <h4>5. External Links & Third-Party Sites</h4>
                    <p>This platform may contain links to external third-party websites for user convenience. Voger LLC exercises no control over and assumes no liability for the content, accuracy, or security of any externally linked platforms. Visiting third-party sites is done entirely at the user's own risk.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="350">
                <div class="policy-card">
                    <div class="policy-card-icon"><i class="bi bi-person-lines-fill"></i></div>
                    <h4>6. Scope of Our Support Role</h4>
                    <p>The support provided by Voger LLC is limited to the role of a third-party facilitator. For matters requiring direct intervention—such as billing disputes with carriers or account-level issues—we strongly recommend contacting your service provider directly. Our team provides general guidance and intermediary assistance where applicable.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="policy-cta">
    <div class="container" data-aos="zoom-in">
        <h3>Have Questions About This Disclaimer?</h3>
        <p style="color:rgba(255,255,255,0.85); font-size:1rem;">Our team is available to clarify any concerns related to our services or this legal notice.</p>
        <a href="{{ route('welcome') }}#contact"><i class="bi bi-envelope-fill me-2"></i> Contact Us</a>
    </div>
</section>
@endsection
