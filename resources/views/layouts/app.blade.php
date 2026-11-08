<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Halcón - @yield('title')</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f4f4f9; 
            min-height: 100vh; 
            display: flex; 
            flex-direction: column; 
        }
        header { background: #1a1a1a; color: white; padding: 20px; text-align: center; }
        nav { background: #333; padding: 12px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a.active { color: #ff9900; text-decoration: underline; }
        .container { padding: 30px; flex: 1; }
        footer { background: #222; color: #ccc; text-align: center; padding: 15px; }
    </style>
</head>
<body>

    <header>
        <h1>Sistema Halcón - Actividad 11</h1>
    </header>

    <nav>
        <a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/photos') }}" class="{{ Request::is('photos') ? 'active' : '' }}">Photos</a>
        <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Prepared by: Ricardo Fuentes Monter | Student ID: AL02938286</p>
    </footer>

</body>
</html>
