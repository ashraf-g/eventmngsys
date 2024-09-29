@extends('layout.app')
@push('title')
    <title>Blog</title>
@endpush

@section('main-section')
    <div class="container">
        <h1 class="text-center my-5">Our Blog</h1>

        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=MyEvent+Blog" alt="MyEvent Blog" class="img-fluid">
        </div>

        <p class="lead text-center">
            Welcome to the MyEvent blog! Stay updated with the latest trends, tips, and insights in event management.
        </p>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Event+Planning+Tips" alt="Blog Post 1"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Essential Tips for Event Planning</h5>
                        <p class="card-text">Discover key strategies to ensure your event runs smoothly, from budgeting to
                            vendor management!</p>
                        <a href="/blog/event-planning" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Networking+Event" alt="Blog Post 2"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Why Networking Events Matter</h5>
                        <p class="card-text">Learn how attending networking events can help you build valuable connections
                            and grow your business.</p>
                        <a href="/blog/networking-events" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Upcoming+Charity+Gala" alt="Blog Post 3"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Join Us at the Annual Charity Gala</h5>
                        <p class="card-text">Get all the details about our upcoming charity gala and how you can contribute
                            to a good cause!</p>
                        <a href="/blog/charity-gala" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5 text-center">Stay Connected!</h2>
        <p class="text-center">
            Subscribe to our newsletter to receive updates on our latest blog posts, events, and special offers. Contact us
            at <a href="mailto:info@myevent.com">info@myevent.com</a>
            {{-- or visit our <a href="/contact">contact page</a> --}}
            for more information!
        </p>
    </div>
@endsection
