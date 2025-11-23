@extends('layouts.app')

@section('content')
<style>
.hero {
    background: url('{{ asset('images/cafeteria-welcome.jpg') }}') no-repeat center center;
    background-size: cover;
    height: 100vh; /* full viewport height */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    color: white;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}
.hero h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}
.hero a.btn {
    font-size: 1.2rem;
    padding: 10px 30px;
}
</style>

@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 text-center" 
     style="background-image: url('{{ asset('images/cafeteria.jpg') }}'); background-size: cover; background-position: center;">
    <div class="text-white">
        <h1 class="display-4 fw-bold">Welcome to the Strathmore Food App!</h1>
        <p class="lead">Order your favorite meals quickly and easily.</p>
        <a href="{{ route('cafeteria.menu') }}" class="btn btn-primary btn-lg mt-3">See Menu</a>
    </div>
</div>
@endsection

@endsection
