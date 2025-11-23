@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cafeteria Menu</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('cafeteria.order') }}" method="POST">
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Item</th>
                    <th>Price ($)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menuItems as $item)
                <tr>
                    <td><input type="checkbox" name="items[]" value="{{ $item['name'] }}"></td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['price'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Place Order</button>
    </form>
</div>
@endsection
