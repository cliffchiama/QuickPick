@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Menu</h2>
    <div class="row">
        @foreach($menuItems as $item)
        <div class="col-md-4 mb-3">
            <div class="card food-item">
                <img src="{{ asset('images/'.$item['image']) }}" class="card-img-top" alt="{{ $item['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                    <p class="card-text">Price: Ksh {{ $item['price'] }}</p>
                    <button class="btn btn-primary add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <hr>

    <h3>Cart</h3>
    <ul id="cart-items"></ul>
    <p>Total: Ksh <span id="total">0</span></p>
    <form id="order-form" action="{{ route('cafeteria.order') }}" method="POST">
        @csrf
        <input type="hidden" name="items" id="cart-data">
        <button type="submit" class="btn btn-success">Place Order</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
let cart = [];

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    const total = document.getElementById('total');
    const cartDataInput = document.getElementById('cart-data');

    cartItems.innerHTML = '';
    let totalPrice = 0;

    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - Ksh ${item.price}`;
        cartItems.appendChild(li);
        totalPrice += item.price;
    });

    total.textContent = totalPrice;
    cartDataInput.value = JSON.stringify(cart); // Send cart as JSON to backend
}

document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', () => {
        const itemCard = button.closest('.food-item');
        const name = itemCard.querySelector('.card-title').innerText;
        const price = parseFloat(itemCard.querySelector('.card-text').innerText.replace('Price: Ksh ', ''));
        cart.push({ name, price });
        updateCart();
        alert(name + ' added to cart!');
    });
});
</script>
@endsection
