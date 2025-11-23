// menu.js
const cart = [];
const cartItems = document.getElementById('cart-items');
const total = document.getElementById('total');

document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', () => {
        const itemDiv = button.closest('.food-item'); // find the parent div
        const name = itemDiv.querySelector('h5').innerText;
        const price = parseFloat(itemDiv.querySelector('p').innerText.replace('Price: $', ''));

        cart.push({ name, price });
        updateCart();

        alert(`${name} added to cart!`);
    });
});

function updateCart() {
    cartItems.innerHTML = '';
    let totalPrice = 0;
    cart.forEach(item => {
        const li = document.createElement('li');
        li.className = 'list-group-item';
        li.textContent = `${item.name} - $${item.price.toFixed(2)}`;
        cartItems.appendChild(li);
        totalPrice += item.price;
    });
    total.textContent = totalPrice.toFixed(2);
}
