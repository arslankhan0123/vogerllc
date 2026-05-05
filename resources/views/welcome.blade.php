@extends('layouts.landing.main')
@section('title', 'Home - Voger LLC')
@section('content')
    <style>
        :root {
            --primary-red: #c1121f;
            --dark-bg: #0f0f0f;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        .hero {
            padding: 120px 0 80px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 25px;
            background: linear-gradient(135deg, #ffffff 60%, #ff6b6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.85);
            max-width: 600px;
            margin-bottom: 35px;
        }

        .btn-get-started {
            background: var(--primary-red);
            padding: 12px 35px;
            border-radius: 50px;
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(193, 18, 31, 0.2);
            color: #fff !important;
            text-decoration: none;
        }

        .btn-get-started:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(193, 18, 31, 0.4);
            background: #d91b2a;
            color: #fff !important;
        }

        .service-item {
            background: #fff;
            padding: 40px 30px;
            border-radius: 24px;
            transition: 0.4s;
            border: 1px solid #eee;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-red);
            transform: scaleX(0);
            transition: 0.4s;
            transform-origin: left;
        }

        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .service-item:hover::before {
            transform: scaleX(1);
        }

        .service-item .icon {
            width: 60px;
            height: 60px;
            background: rgba(193, 18, 31, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            color: var(--primary-red);
            font-size: 24px;
            transition: 0.3s;
        }

        .service-item:hover .icon {
            background: var(--primary-red);
            color: #fff;
        }

        .faq-item {
            background: #fff !important;
            border-radius: 15px !important;
            margin-bottom: 15px !important;
            border: 1px solid #eee !important;
            padding: 20px !important;
        }

        .faq-item h3 {
            font-size: 1.1rem !important;
            font-weight: 600 !important;
        }

        .info-wrap {
            background: #fff;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .skills-content .progress {
            height: 10px;
            border-radius: 5px;
            background: #eee;
            margin-bottom: 20px;
        }

        .skills-content .progress-bar {
            background: var(--primary-red);
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 20px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--primary-red);
            border-radius: 2px;
        }

        .hero-img img {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
    </style>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1>Redefining Connectivity for the Modern Era</h1>
                    <p>At Voger LLC, we bridge the gap between technology and convenience. Discover a unified suite of digital services—from ultra-fast fiber internet and premium entertainment to seamless mobile plans and effortless bill management.</p>
                    <div class="d-flex gap-3">
                        <a href="tel:+18336217696" class="btn-get-started d-flex align-items-center">
                            <i class="bi bi-telephone-fill me-2"></i> (833) 621-7696
                        </a>
                        <a href="#contact" class="btn btn-outline-light rounded-pill px-4 py-2 border-2 d-flex align-items-center">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('landingPage/assets/img/hero-img.png') }}" class="img-fluid" alt="Voger LLC Connectivity">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section py-5">
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Partner in Digital Excellence</h2>
        </div>

        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 content" data-aos="fade-right">
                    <h3 class="fw-bold mb-4">Empowering Modern Lifestyles with Integrated Solutions</h3>
                    <p class="lead mb-4">Voger LLC isn't just a service provider; we're your gateway to a more connected and efficient lifestyle. We've simplified the complexities of modern utilities by bringing high-performance solutions under one sophisticated umbrella.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-shield-check text-danger fs-4 me-3"></i>
                            <span>Secure, encrypted pathways for all your utility transactions.</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-lightning-charge text-danger fs-4 me-3"></i>
                            <span>High-velocity infrastructure designed for zero downtime.</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-people text-danger fs-4 me-3"></i>
                            <span>Human-centric support dedicated to your digital well-being.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="p-4 rounded-4 bg-light shadow-sm">
                        <p>With decades of collective expertise, we recognize that connectivity is the lifeblood of the modern home. Our mission is to deliver fast, reliable, and affordable digital architecture that integrates seamlessly into your daily routine.</p>
                        <p>From the heart of Brooklyn to the digital frontier, we are committed to transparency, innovation, and your absolute satisfaction. Experience the Voger difference today.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background py-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-7">
                    <div class="px-xl-5" data-aos="fade-up">
                        <h2 class="fw-bold mb-4">The <span class="text-danger">Voger</span> Advantage</h2>
                        <p class="mb-5">We've refined the digital experience by focusing on three core pillars: simplicity, performance, and integrity. Join thousands of satisfied users who trust Voger LLC for their essential services.</p>
                    </div>
                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-item faq-active">
                            <h3><span>01</span> Unified Digital Ecosystem</h3>
                            <div class="faq-content">
                                <p>Consolidate your TV, internet, and mobile needs into a single, intuitive platform. Manage your entire digital life without the hassle of multiple vendors.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3><span>02</span> Cutting-Edge Infrastructure</h3>
                            <div class="faq-content">
                                <p>Our network is built for the future. Enjoy blazing-fast fiber speeds and ultra-stable connections that keep you ahead of the curve.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item">
                            <h3><span>03</span> Uncompromising Transparency</h3>
                            <div class="faq-content">
                                <p>We believe in honest service. No hidden surcharges, no confusing contracts—just premium quality at competitive, straightforward rates.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('landingPage/assets/img/why-us.png') }}" class="img-fluid" alt="The Voger Advantage" data-aos="zoom-in">
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills section py-5">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('landingPage/assets/img/skills.png') }}" class="img-fluid rounded-4 shadow-lg" alt="Technical Expertise">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content px-lg-5">
                    <h3 class="fw-bold mb-4">Mastering the Digital Landscape</h3>
                    <p class="fst-italic mb-4">Our technical prowess ensures that every installation is handled with precision. From complex network arrays to residential setups, we deliver perfection.</p>
                    
                    <div class="skills-content">
                        @php
                            $skills = [
                                ['label' => 'Fiber Optic Setup', 'val' => 100],
                                ['label' => 'Enterprise Wi-Fi', 'val' => 100],
                                ['label' => 'Premium TV Integration', 'val' => 98],
                                ['label' => 'Secure Bill Processing', 'val' => 100],
                                ['label' => '24/7 Technical Support', 'val' => 99]
                            ];
                        @endphp
                        @foreach($skills as $skill)
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">{{ $skill['label'] }}</span>
                                <span class="text-danger fw-bold">{{ $skill['val'] }}%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $skill['val'] }}%" aria-valuenow="{{ $skill['val'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services section light-background py-5">
        <div class="container section-title" data-aos="fade-up">
            <h2>Premium Solutions</h2>
            <p>From the core of your home to the edge of your mobility, our services are designed to scale with your needs. Explore our comprehensive portfolio of digital utilities.</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach ($services as $service)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('services.show', $service->id) }}" class="w-100 text-decoration-none">
                            <div class="service-item">
                                <div class="icon"><i class="bi bi-lightning-fill"></i></div>
                                <h4 class="fw-bold text-dark">{{ $service->title }}</h4>
                                <div class="text-muted small">{!! $service->short_description !!}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background py-5">
        <img src="{{ asset('landingPage/assets/img/cta-bg.webp') }}" alt="Connect with Voger">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in">
                <div class="col-xl-9 text-center">
                    <h3 class="display-5 fw-bold mb-3">Ready to Elevate Your Digital Life?</h3>
                    <p class="fs-5 mb-4">Join the Voger LLC family today and experience the pinnacle of connectivity. Our experts are standing by to curate the perfect package for you.</p>
                    <a class="btn-get-started text-white text-decoration-none fs-4" href="tel:+18336217696">
                        <i class="bi bi-telephone-outbound me-2"></i> (833) 621-7696
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq-2" class="faq-2 section py-5">
        <div class="container section-title" data-aos="fade-up">
            <h2>Insight & Clarity</h2>
            <p>Find answers to common inquiries and learn more about how Voger LLC can transform your daily connectivity.</p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-container">
                        @php
                            $faqs = [
                                ['q' => 'What makes Voger LLC different?', 'a' => 'We offer a unified approach, combining top-tier performance with absolute transparency and localized support.'],
                                ['q' => 'Can I customize my service bundle?', 'a' => 'Absolutely. We pride ourselves on creating bespoke packages that align with your specific lifestyle and budget.'],
                                ['q' => 'How secure are my bill payments?', 'a' => 'We utilize industry-leading encryption and secure gateways to ensure every transaction is protected.'],
                                ['q' => 'Is technical support available 24/7?', 'a' => 'Yes, our dedicated technical team is available around the clock to assist with any challenges you may face.'],
                                ['q' => 'How do I initiate my upgrade?', 'a' => 'Simply call our concierge line at (833) 621-7696 or fill out the contact form below to get started.']
                            ];
                        @endphp
                        @foreach($faqs as $index => $faq)
                        <div class="faq-item {{ $index == 0 ? 'faq-active' : '' }}" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                            <i class="faq-icon bi bi-patch-question"></i>
                            <h3>{{ $faq['q'] }}</h3>
                            <div class="faq-content">
                                <p>{{ $faq['a'] }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section py-5">
        <div class="container section-title" data-aos="fade-up">
            <h2>Connect With Us</h2>
            <p>Our consultants are available to provide expert guidance on your digital requirements. Reach out today for a personalized consultation.</p>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap h-100">
                        <div class="info-item d-flex mb-4" data-aos="fade-up">
                            <i class="bi bi-geo-alt-fill text-danger fs-3 me-3"></i>
                            <div>
                                <h3 class="fs-5 fw-bold">Executive Office</h3>
                                <p class="text-muted mb-0">7811 5th Ave #33 Brooklyn, NY 11209</p>
                            </div>
                        </div>

                        <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-telephone-plus-fill text-danger fs-3 me-3"></i>
                            <div>
                                <h3 class="fs-5 fw-bold">Direct Concierge</h3>
                                <p class="text-muted mb-0">(833) 621-7696</p>
                            </div>
                        </div>

                        <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-envelope-at-fill text-danger fs-3 me-3"></i>
                            <div>
                                <h3 class="fs-5 fw-bold">Correspondence</h3>
                                <p class="text-muted mb-0">sales@vogerllc.com</p>
                            </div>
                        </div>
                        <div class="mt-4 p-4 rounded-4 bg-light text-center">
                            <p class="mb-0 fw-bold">Available 24/7 for support and inquiries.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="bg-white p-4 p-lg-5 rounded-4 shadow-sm border">
                        <form id="contact-form" action="#" method="post" class="php-email-form">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Full Name</label>
                                    <input type="text" name="name" class="form-control rounded-pill px-4" placeholder="Enter your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Email Address</label>
                                    <input type="email" name="email" class="form-control rounded-pill px-4" placeholder="name@example.com" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-bold">Subject</label>
                                    <input type="text" name="subject" class="form-control rounded-pill px-4" placeholder="How can we help?" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-bold">Message</label>
                                    <textarea name="message" class="form-control rounded-4 px-4 py-3" rows="6" placeholder="Share your requirements..." required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading mb-3" style="display:none;">
                                        <div class="spinner-border text-danger" role="status"></div>
                                    </div>
                                    <div class="sent-message mb-3" style="display:none;">Your request has been received. Our team will contact you shortly.</div>
                                    <button type="submit" class="btn-get-started border-0 text-white w-100 fs-5 py-3">Submit Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $('#contact-form').on('submit', function (e) {
            e.preventDefault();

            let form = $(this);
            let formData = new FormData(this);
            let submitBtn = form.find('button[type="submit"]');

            submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span>Processing...');

            $.ajax({
                url: "{{route('contact.store')}}",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Request Received',
                        text: 'Thank you for reaching out. A Voger specialist will contact you shortly!',
                        confirmButtonColor: '#c1121f'
                    });
                    form[0].reset();
                },
                error: function (xhr) {
                    let errors = xhr.responseJSON?.errors;
                    let errorMsg = "Submission failed. Please verify your information and try again.";
                    if (errors) {
                        errorMsg = Object.values(errors).join('\n');
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'System Error',
                        text: errorMsg,
                        confirmButtonColor: '#c1121f'
                    });
                },
                complete: function () {
                    submitBtn.prop('disabled', false).html('Submit Request');
                }
            });
        });
    });
</script>
@endpush