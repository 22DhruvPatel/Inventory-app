<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        .highlight { 
            font-weight: bold; 
            color: #0d6efd !important; 
            border-bottom: 2px solid #0d6efd; 
        }
        
        html, body { height: 100%; }
        body { display: flex; flex-direction: column; }
        .content-wrapper { flex: 1; }
    </style>
</head>
<body>
    <header class="bg-dark text-white text-center py-4">
        <h1> InventoryPro Manager</h1>
    </header>

    <div class="container content-wrapper mt-4">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; {{ date('Y') }} InventoryPro. All rights reserved.</p>
    </footer>
</body>
</html>