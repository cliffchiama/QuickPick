@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1>Welcome to the Strathmore Cafeteria!</h1>
    <img src="{{ asset('images/cafeteria-welcome.jpg') }}" 
         alt="School Cafeteria" 
         class="img-fluid mt-4" 
         style="max-width: 600px;">
</div>
@endsection
