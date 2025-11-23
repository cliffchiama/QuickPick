const cart = [];
const cartItems = document.getElementById('cart-items');
const total = document.getElementById('total');

document.querySelectorAll('.food-item button').forEach((btn, index) => {
  btn.addEventListener('click', () => {
    const item = btn.parentElement;
    const name = item.querySelector('h3').innerText;
    const price = parseFloat(item.querySelector('p').innerText.replace('Price: $', ''));
    
    cart.push({ name, price });
    updateCart();
  });
});

function updateCart() {
  cartItems.innerHTML = '';
  let totalPrice = 0;
  cart.forEach(item => {
    const li = document.createElement('li');
    li.textContent = `${item.name} - $${item.price.toFixed(2)}`;
    cartItems.appendChild(li);
    totalPrice += item.price;
  });
  total.textContent = totalPrice.toFixed(2);
}
