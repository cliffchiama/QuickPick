<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Cafeteria</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header -->
  <header>
    <h1>School Cafeteria</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#">Menu</a>
      <a href="#">Cart</a>
    </nav>
  </header>

  <!-- Menu Section -->
  <section class="menu">
    <h2>Today's Menu</h2>
    <div class="food-items">
      <!-- Food item example -->
      <div class="food-item">
        <img src="burger.jpg" alt="Burger">
        <h3>Burger</h3>
        <p>Price: $2.50</p>
        <button>Add to Cart</button>
      </div>
      <div class="food-item">
        <img src="pizza.jpg" alt="Pizza">
        <h3>Pizza</h3>
        <p>Price: $3.00</p>
        <button>Add to Cart</button>
      </div>
    </div>
  </section>

  <!-- Cart Section -->
  <aside class="cart">
    <h2>Cart</h2>
    <ul id="cart-items"></ul>
    <p>Total: $<span id="total">0.00</span></p>
    <button id="checkout">Checkout</button>
  </aside>

  <footer>
    <p>School Cafeteria &copy; 2025</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
