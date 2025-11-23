@extends('layouts.app')

@section('content')
<style>
    /* Full viewport welcome page */
    .welcome-page {
        height: 100vh; /* full screen */
        background-image: url('{{ asset('images/cafeteria.jpg') }}');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        text-shadow: 1px 1px 4px #000;
        text-align: center;
    }

    .welcome-page h1 {
        font-size: 4rem;
        margin-bottom: 30px;
    }

    .welcome-page .btn {
        font-size: 1.5rem;
        padding: 10px 30px;
    }

    /* Add spacing for fixed navbar */
    body {
        padding-top: 70px; /* match navbar height */
    }
</style>

<<div class="welcome-page">
    <h1>Welcome to the Strathmore Food App!</h1>
    <p class="lead">QuickPick - Quick and Easy!</p>
    <a href="{{ route('cafeteria.menu') }}" class="btn btn-primary btn-lg">See Menu</a>
</div>
@endsection
