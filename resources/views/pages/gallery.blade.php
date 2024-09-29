@extends('layout.app')
@push('title')
    <title>Gallery</title>
@endpush

@section('main-section')
    <div class="container">
        <h1 class="text-center my-5">Gallery</h1>

        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/800x400?text=MyEvent+Gallery" alt="MyEvent Gallery" class="img-fluid">
        </div>

        <p class="lead text-center">
            Explore the memorable moments captured during our events at <strong>MyEvent</strong>.
            Our gallery showcases the creativity and joy that define our gatherings.
        </p>

        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="https://via.placeholder.com/400x300?text=Event+1" alt="Event 1" class="img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img src="https://via.placeholder.com/400x300?text=Event+2" alt="Event 2" class="img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img src="https://via.placeholder.com/400x300?text=Event+3" alt="Event 3" class="img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img src="https://via.placeholder.com/400x300?text=Event+4" alt="Event 4" class="img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img src="https://via.placeholder.com/400x300?text=Event+5" alt="Event 5" class="img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img src="https://via.placeholder.com/400x300?text=Event+6" alt="Event 6" class="img-fluid">
            </div>
        </div>

        <h2 class="mt-5 text-center">Join Us!</h2>
        <p class="text-center">
            Want to create unforgettable memories with us? Contact us at <a
                href="mailto:info@myevent.com">info@myevent.com</a>
            {{-- or visit our <a href="/contact">contact page</a>  --}}
            to learn more!
        </p>
    </div>
@endsection
