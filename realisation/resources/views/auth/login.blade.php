@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="content-fluid d-flex justify-content-center">
        <div class="col-md-6 col-lg-4 mt-5">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white text-center">
                    <h3 class="mb-0">Login</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-info w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
