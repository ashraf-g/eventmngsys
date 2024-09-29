@extends('layout.app')
@push('title')
    <title>About</title>
@endpush

@section('main-section')
    <div class="container">
        <h1 class="text-center my-5">About Us</h1>

        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=event+banne" alt="Exceptional Events" class="img-fluid">
        </div>

        <p class="lead text-center">
            At <strong>My Event</strong>, we’re not just about planning events—we’re about crafting unforgettable
            experiences!
            Powered by the robust Laravel framework, our event management system is designed to make every aspect of your
            event seamless and stress-free.
        </p>

        <h2 class="mt-5">Our Mission</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=team+collaboration" alt="Mission" class="img-fluid">
        </div>
        <p>
            We believe that every event, big or small, deserves meticulous attention and creative flair. Our mission is to
            empower event organizers with cutting-edge tools that simplify planning and elevate guest experiences.
        </p>

        <h2 class="mt-5">What We Offer</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=dashboard" alt="Features" class="img-fluid">
        </div>
        <ul>
            <li><strong>User-Friendly Interface:</strong> Navigate our intuitive platform with ease, making event planning a
                breeze.</li>
            <li><strong>Comprehensive Features:</strong> From ticketing and registration to real-time analytics and
                feedback, we’ve got you covered.</li>
            <li><strong>Customization Options:</strong> Tailor every aspect of your event to reflect your unique vision.
            </li>
            <li><strong>Expert Support:</strong> Our dedicated team is just a message away, ready to assist you at every
                step of your journey.</li>
        </ul>

        <h2 class="mt-5">Our Team</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=team" alt="Our Team" class="img-fluid">
        </div>
        <p>
            We are a diverse group of event enthusiasts, tech innovators, and creative thinkers who share a common goal: to
            make your events extraordinary.
            Our team combines industry expertise with a passion for technology, ensuring that our platform meets the highest
            standards of functionality and reliability.
        </p>

        <h2 class="mt-5">Join Us on This Journey</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=happy+attendees" alt="Join Us" class="img-fluid">
        </div>
        <p>
            We invite you to explore our platform and discover how we can help you bring your event ideas to life.
            At <strong>My Event</strong>, your vision is our mission, and we’re excited to partner with you on
            this adventure!
        </p>

        <h2 class="mt-5">Let’s Connect!</h2>
        <p>
            Have questions or want to learn more? Reach out to us at <a href="mailto:info@myevent.com">info@myevent.com</a>,
            or follow us on <a href="[social media links]">social media</a>.
            Together, let’s create something unforgettable!
        </p>
    </div>
@endsection
