@extends('layout.app')
@push('title')
    <title>Event</title>
@endpush

@section('main-section')
    <div class="container">
        <h1 class="text-center my-5">Upcoming Events</h1>

        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=MyEvent+Upcoming+Events" alt="Upcoming Events"
                class="img-fluid">
        </div>

        <p class="lead text-center">
            Join us for our exciting upcoming events at <strong>MyEvent</strong>. We have something for everyone!
        </p>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Event+1" alt="Event 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Event Title 1</h5>
                        <p class="card-text">Join us for an exciting event on <strong>Date 1</strong>. Experience the thrill
                            of live performances and engaging activities!</p>
                        <a href="/event/1" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Event+2" alt="Event 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Event Title 2</h5>
                        <p class="card-text">Don't miss our upcoming workshop on <strong>Date 2</strong>. Enhance your
                            skills and network with professionals!</p>
                        <a href="/event/2" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Event+3" alt="Event 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Event Title 3</h5>
                        <p class="card-text">Join us for a charity gala on <strong>Date 3</strong>. Help us make a
                            difference while enjoying an elegant evening!</p>
                        <a href="/event/3" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5 text-center">Stay Updated!</h2>
        <p class="text-center">
            Subscribe to our newsletter for the latest updates on events and special offers. Contact us at <a
                href="mailto:info@myevent.com">info@myevent.com</a>
            {{-- or visit our <a href="/contact">contact page</a>  --}}
            to learn more!
        </p>
    </div>
@endsection
