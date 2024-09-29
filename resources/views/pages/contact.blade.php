@extends('layouts.app')

@section('main-content')
    <div class="contact py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">Contact Us</h2>
            <p class="text-lg text-gray-600 mb-12">
                We’d love to hear from you! Please fill out the form below or reach out directly.
            </p>

            <div class="flex justify-center mb-12">
                <div class="w-full max-w-md">
                    <form action="{{ route('contact.submit') }}" method="POST" class="bg-white p-6 rounded shadow-lg">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-left mb-2">Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full border border-gray-300 p-2 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-left mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full border border-gray-300 p-2 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-left mb-2">Message</label>
                            <textarea id="message" name="message" required class="w-full border border-gray-300 p-2 rounded" rows="4"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">Send
                            Message</button>
                    </form>
                </div>
            </div>

            <div class="contact-info mt-12">
                <h3 class="text-2xl font-semibold mb-4">Reach Us At</h3>
                <p class="text-lg text-gray-700">Email: <a href="mailto:info@example.com"
                        class="text-blue-500">info@example.com</a></p>
                <p class="text-lg text-gray-700">Phone: <a href="tel:+1234567890" class="text-blue-500">+1 (234) 567-890</a>
                </p>
                <p class="text-lg text-gray-700">Address: 123 Event St, City, Country</p>
            </div>
        </div>
    </div>
@endsection
