@extends('layout.app')

@push('title')
    <title>SignUp</title>
@endpush

@section('main-section')
    <div class="container">
        <h1 class="text-center my-5">SignUp</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">SignUp</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/') }}/register" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" autofocus required />
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

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

                            <div class="mb-3">
                                <label for="cpassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" name="password_confirmation"
                                    required />
                                @error('cpassword')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">SignUp</button>
                        </form>

                        <div class="mt-3 text-center">
                            <a href="/login">Already have an account? Login here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
