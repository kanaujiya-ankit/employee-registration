@extends('layouts.Auth')

@section('content')
<div class="auth-wrapper">
    <div class="auth-content">
        
        <div class="card">
            <div class="card-body text-center">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger') }}
                    </div>
                @endif

                @foreach ($errors->all() as $error)

                <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach

                <div class="mb-4">
                    <i class="feather icon-unlock auth-icon"></i>
                </div>
                <h3 class="mb-4">Sign In</h3>
                <form action="{{ url('signin') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="input-group mb-4">
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
                <button class="btn btn-primary shadow-2 mb-4">Login</button>
                </form>
               
                <p class="mb-0 text-muted">Don’t have an account? <a href="{{ url('registration') }}">Signup</a></p>
            </div>
        </div>
    </div>
</div>
@stop