<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lateral</title>
    <style>
        /* Add some basic styling to our menu */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* Style our sidebar menu */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            height: 100vh;
            background-color: #ff6801; /* Your desired color */
            padding: 20px;
            box-sizing: border-box;
        }
        
        /* Style our menu items */
        .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .sidebar li {
            margin-bottom: 10px;
        }
        
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        
        .sidebar a:hover {
            color: #ccc;
        }
    </style>
</head>
<body>
    <!-- Our sidebar menu -->
    <div class="sidebar">
        <ul>
            <li><a href="#">Item 1</a></li>
            <li><a href="#">Item 2</a></li>
            <li><a href="#">Item 3</a></li>
            <li><a href="#">Item 4</a></li>
            <li><a href="#">Item 5</a></li>
        </ul>
    </div>
    
    <!-- Our main content area -->
    <div style="margin-left: 200px; padding: 20px;">
        <!-- Add your main content here -->
        <h1>Main Content Area</h1>
        <p>This is where your main content will go.</p>
    </div>
</body>
</html>