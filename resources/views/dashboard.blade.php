<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - QuickPick</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
        .btn-logout {
            background: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }
        .btn-logout:hover {
            background: #c82333;
        }
        .btn-profile {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        .btn-profile:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-message">
            <h2>✅ You are logged in!</h2>
            <p>Welcome to QuickPick Dashboard</p>
        </div>
        
        <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <p><strong>Role:</strong> {{ auth()->user()->role }}</p>
        <p><strong>Student ID:</strong> {{ auth()->user()->student_id }}</p>
        
        <!-- Profile Link Added -->
        <p>
            <a href="/profile" class="btn-profile">
                Edit Profile
            </a>
        </p>

        <form method="POST" action="{{ route('logout') }}" id="logout-form">
            @csrf
        </form>
        
        <button type="submit" form="logout-form" class="btn-logout">
            Logout
        </button>
    </div>
</body>
</html>