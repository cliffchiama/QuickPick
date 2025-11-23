@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to the School Cafeteria</h1>
    <p>Choose from a variety of meals and drinks!</p>
    <a href="{{ route('cafeteria.menu') }}" class="btn btn-primary">View Menu</a>
</div>
@endsection
