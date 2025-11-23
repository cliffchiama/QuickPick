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

<div class="hero">
    <h1>Welcome to the School Cafeteria</h1>
    <a href="{{ route('cafeteria.menu') }}" class="btn btn-primary">View Menu</a>
</div>
@endsection
