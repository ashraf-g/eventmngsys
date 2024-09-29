@extends('layout.app')

@push('title')
    <title>Login</title>
@endpush

@section('main-section')
    <div class="container mt-5">
        <h1 class="text-center my-5">Login</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <h1 class="text-center">Login</h1>
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ url('/') }}/login" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required />
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required />
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <input type="hidden" name="role" value="user" />

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>

                        <div class="mt-3 text-center">
                            <a href="/register">Don't have an account? Register here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
