@extends('layout.app')
@push('title')
    <title>Home</title>
@endpush

@section('main-section')

    <body class="index-page">
        <main class="main">
            <!-- Hero Section -->
            <section id="home" class="hero section">
                <div class="hero-bg">
                    <img src="assets/img/hero-bg-light.webp" alt="" />
                </div>
                <div class="container text-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 data-aos="fade-up" class="">Welcome to <span>MyEvent</span></h1>
                        <p data-aos="fade-up" data-aos-delay="100" class="">
                            You have got Plans<br />
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/login" class="btn-get-started">Book Now</a>
                        </div>
                        <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt=""
                            data-aos="zoom-out" data-aos-delay="300" />
                    </div>
                </div>
            </section>
            <!-- /Hero Section -->

            <!-- About Section -->
            <section id="about" class="about section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                            <p class="who-we-are">Who We Are</p>
                            <h3>Your Premier Event Management Partner</h3>
                            <p class="fst-italic">
                                At MyEvent Company, we are more than just event organizers; we are your dedicated partners
                                in bringing your vision to life.
                            </p>
                            <ul>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    <span>Experience: With years of industry experience, we bring seasoned expertise to the
                                        table, ensuring seamless execution from concept to completion.

                                    </span>
                                </li>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    <span>Innovation: We thrive on creativity and innovation, constantly exploring new
                                        trends and technologies to deliver cutting-edge event solutions.</span>
                                </li>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    <span>Tailored Approach: Every event is unique, and so is our approach. We listen to
                                        your needs and tailor our services to match your objectives and budget.</span>
                                </li>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    <span>Full-Service Solutions: Whether it's corporate events, trade shows, virtual
                                        conferences, or weddings, we offer end-to-end solutions tailored to your specific
                                        needs.</span>
                                </li>
                            </ul>
                            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-lg-6">
                                    <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="col-lg-6">
                                    <div class="row gy-4">
                                        <div class="col-lg-12">
                                            <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="" />
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /About Section -->

            <!-- Features Section -->
            <section id="features" class="features section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2 class="">Features</h2>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 d-flex align-items-center">
                            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                        <i class="bi bi-binoculars"></i>
                                        <div>
                                            <h4 class="d-none d-lg-block">
                                                Event Registration
                                            </h4>
                                            <p>
                                                Allow attendees to register online, manage ticket sales, and collect
                                                registration fees.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                        <i class="bi bi-box-seam"></i>
                                        <div>
                                            <h4 class="d-none d-lg-block">
                                                Mobile App Integration
                                            </h4>
                                            <p>
                                                Integration with mobile apps for providing attendees with event information,
                                                schedules, networking opportunities, and interactive features.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                        <i class="bi bi-brightness-high"></i>
                                        <div>
                                            <h4 class="d-none d-lg-block">
                                                Sponsor Management
                                            </h4>
                                            <p>
                                                Manage sponsorships, benefits, agreements, and communication with sponsors.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Tab Nav -->
                        </div>

                        <div class="col-lg-6">
                            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                                <div class="tab-pane fade active show" id="features-tab-1">
                                    <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid" />
                                </div>
                                <!-- End Tab Content Item -->

                                <div class="tab-pane fade" id="features-tab-2">
                                    <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid" />
                                </div>
                                <!-- End Tab Content Item -->

                                <div class="tab-pane fade" id="features-tab-3">
                                    <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid" />
                                </div>
                                <!-- End Tab Content Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Features Section -->

            <!-- Features Details Section -->
            <section id="features-details" class="features-details section">
                <div class="container">
                    <div class="row gy-4 justify-content-between features-item">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/features-1.jpg" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="content">
                                <h3>Venue Management</h3>
                                <p>
                                    Venue search and selection tools with detailed venue information.
                                    Floor plan layout and seating arrangement customization.
                                    Integration with venue booking systems for seamless reservation management.
                                    Venue logistics management, including load-in/out schedules and parking information.
                                </p>
                                <a href="#" class="btn more-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Features Item -->

                    <div class="row gy-4 justify-content-between features-item">
                        <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="content">
                                <h3>Exhibitor Management</h3>
                                <p>
                                    Online booth reservation system with interactive floor plans.
                                    Exhibitor portals for managing booth details, staff registration, and marketing
                                    materials.
                                    Lead retrieval tools for capturing attendee information during the event.
                                    Integration with exhibitor services such as catering and AV equipment rental.

                                </p>
                                <a href="#" class="btn more-btn">Learn More</a>
                            </div>
                        </div>

                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/features-2.jpg" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <!-- Features Item -->
                </div>
            </section>
            <!-- /Features Details Section -->

            <!-- Services Section -->
            <section id="services" class="services section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Services</h2>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item item-cyan position-relative">
                                <i class="bi bi-activity icon"></i>
                                <div>
                                    <h3>Corporate Events</h3>
                                    <p>
                                        Corporate events are professional gatherings organized by businesses for various
                                        purposes like networking, team building, product launches, or celebrating
                                        achievements, fostering connections, and achieving organizational goals.
                                    </p>
                                    <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item item-orange position-relative">
                                <i class="bi bi-broadcast icon"></i>
                                <div>
                                    <h3>Brand Activation & Promotion</h3>
                                    <p>
                                        Brand activation and promotion involve strategic marketing initiatives aimed at
                                        engaging consumers, building brand awareness, and driving sales through experiential
                                        events, digital campaigns, sponsorships, and other creative activations tailored to
                                        connect with target audiences.
                                    </p>
                                    <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item item-teal position-relative">
                                <i class="bi bi-easel icon"></i>
                                <div>
                                    <h3>Exhibition Stall Design & Trade Show</h3>
                                    <p>
                                        Exhibition stall design focuses on creating visually appealing and functional booths
                                        for trade shows, showcasing products/services effectively to attract visitors and
                                        generate leads, enhancing brand visibility and fostering business opportunities.
                                    </p>
                                    <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item item-red position-relative">
                                <i class="bi bi-bounding-box-circles icon"></i>
                                <div>
                                    <h3>Wedding Events</h3>
                                    <p>
                                        Wedding events celebrate the union of couples, meticulously planned and executed to
                                        create unforgettable experiences, encompassing ceremonies, receptions, décor,
                                        entertainment, and guest accommodations, reflecting the couple's unique love story
                                        and vision.
                                    </p>
                                    <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item item-indigo position-relative">
                                <i class="bi bi-calendar4-week icon"></i>
                                <div>
                                    <h3>Virtual Events</h3>
                                    <p>
                                        Virtual events leverage digital platforms to host gatherings, conferences, or
                                        experiences online, enabling remote participation through webinars, live streams,
                                        virtual booths, and interactive features, facilitating global reach,
                                        cost-effectiveness, and accessibility.
                                    </p>
                                    <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-item item-pink position-relative">
                                <i class="bi bi-chat-square-text icon"></i>
                                <div>
                                    <h3>Trade Show</h3>
                                    <p>
                                        Trade shows are industry-specific events where businesses showcase their products
                                        and services to potential clients, partners, and investors, fostering networking,
                                        lead generation, and industry knowledge exchange through exhibitions,
                                        demonstrations, presentations, and networking opportunities.
                                    </p>
                                    <a href="service-details.html" class="read-more stretched-link">Learn More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->
                    </div>
                </div>
            </section>
            <!-- /Services Section -->

            <!-- More Features Section -->
            <section id="more-features" class="more-features section">
                <div class="container">
                    <div class="row justify-content-around gy-4">
                        <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3>On-site Check-in and Badge Printing</h3>
                            <p>
                                Fast and efficient check-in process using barcode or QR code scanning.
                                Self-service kiosks for on-site registration and badge printing.
                                Real-time attendance tracking and reporting.
                                On-demand badge reprints for lost or damaged badges.
                            </p>

                            <div class="row">
                                <div class="col-lg-6 icon-box d-flex">
                                    <i class="bi bi-easel flex-shrink-0"></i>
                                    <div>
                                        <h4>Networking Tools</h4>
                                        <p>
                                            Matchmaking algorithms for connecting attendees with similar interests or
                                            profiles.
                                            Networking lounges and meeting scheduling features.
                                            Attendee messaging and virtual business card exchange.
                                            Post-event networking opportunities and follow-up recommendations.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-lg-6 icon-box d-flex">
                                    <i class="bi bi-patch-check flex-shrink-0"></i>
                                    <div>
                                        <h4>Analytics and Reporting</h4>
                                        <p>
                                            Dashboards with real-time insights into event performance metrics.
                                            Customizable reports for measuring ROI and attendee engagement.
                                            Data visualization tools for presenting key metrics to stakeholders.
                                            Integration with Google Analytics or other analytics platforms for advanced
                                            reporting capabilities.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->
                            </div>
                        </div>

                        <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/features-3.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- /More Features Section -->
            <!-- Contact Section -->
            <section id="contact" class="contact section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                </div>
                <!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>

                    <div class="row gy-4 mt-1">
                        <div class="col">
                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="400">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required="" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required="" />
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required="" />
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">
                                            Your message has been sent. Thank you!
                                        </div>

                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
            </section>
            <!-- /Contact Section -->
        </main>
    @endsection()



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>


</body>

</html>
