@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-between vh-100 bg-light">
    <!-- Header -->
    <header class="bg-primary text-white py-3 shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h4 mb-0">Furniture Website</h1>
            <nav>
                <a href="{{ route('home') }}" class="text-white text-decoration-none me-3">Home</a>
                <a href="{{ route('products.index') }}" class="text-white text-decoration-none me-3">Products</a>
                <a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Login Form -->
    <main class="flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg border-0" style="width: 400px; border-radius: 15px;">
            <div class="card-header text-center bg-primary text-white" style="border-radius: 15px 15px 0 0;">
                <h3 class="mb-0">Login</h3>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                            placeholder="Enter your email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                            name="password" required autocomplete="current-password" placeholder="Enter your password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" 
                            name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Log in</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center bg-white" style="border-radius: 0 0 15px 15px;">
                <small>
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">Forgot your password?</a>
                </small>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white py-3 mt-4 shadow-sm">
        <div class="container text-center">
            <p class="mb-0">© 2025 Furniture Website. All rights reserved.</p>
        </div>
    </footer>
</div>
@endsection
