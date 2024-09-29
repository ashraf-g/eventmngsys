@extends('layout.app')
@push('title')
    <title>Service</title>
@endpush

@section('main-section')
    <div class="container">
        <h1 class="text-center my-5">Our Services</h1>

        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=Our+Services" alt="Our Services" class="img-fluid">
        </div>

        <p class="lead text-center">
            At <strong>My Event</strong>, we offer a range of services tailored to meet the diverse needs of our
            clients.
            Our team is dedicated to delivering exceptional quality and creativity in every project we undertake.
        </p>

        <h2 class="mt-5">Event Planning</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=Event+Planning" alt="Event Planning" class="img-fluid">
        </div>
        <p>
            Our expert event planners will work closely with you to design and execute events that reflect your vision and
            goals.
            From concept to completion, we handle all the details to ensure a successful and memorable experience.
        </p>

        <h2 class="mt-5">Venue Selection</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=Venue+Selection" alt="Venue Selection" class="img-fluid">
        </div>
        <p>
            Finding the perfect venue can be challenging. We assist you in identifying locations that fit your event style,
            budget, and logistics, ensuring a suitable atmosphere for your guests.
        </p>

        <h2 class="mt-5">Catering Services</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=Catering+Services" alt="Catering Services" class="img-fluid">
        </div>
        <p>
            Our catering partners provide delicious menu options that cater to all tastes and dietary requirements.
            We ensure that your guests enjoy a delightful culinary experience.
        </p>

        <h2 class="mt-5">Event Promotion</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=Event+Promotion" alt="Event Promotion" class="img-fluid">
        </div>
        <p>
            Get the word out about your event! We provide strategic marketing services to promote your event across various
            channels,
            ensuring maximum visibility and attendance.
        </p>

        <h2 class="mt-5">On-Site Management</h2>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=On-Site+Management" alt="On-Site Management"
                class="img-fluid">
        </div>
        <p>
            Our team will be on-site during your event to manage all logistics, ensuring everything runs smoothly.
            We handle any issues that may arise, allowing you to focus on enjoying the event.
        </p>

        <h2 class="mt-5">Let’s Get Started!</h2>
        <p>
            Ready to bring your event vision to life? Contact us at <a href="mailto:info@myevent.com">info@myevent.com</a>
            {{-- or fill out our <a href="/contact">contact form</a> to discuss how we can help you create an unforgettable
            experience! --}}
        </p>
    </div>
@endsection
