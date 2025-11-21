<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Postresss de ValeriIiIaA')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="description" content="Dashboard kawaii para gestionar postres - CRUD con Laravel">
</head>
<body class="theme-light">
    <header class="site-header" role="banner">
        <div class="container header-inner">
            <div class="brand">
                <a href="{{ route('postres.index') }}" class="logo" aria-label="Ir al inicio">
                    <span class="logo-emoji" aria-hidden="true"></span>
                    <h1>Postres de ValeriIiIA</h1>
                </a>
            </div>

            <nav class="main-nav" role="navigation" aria-label="Navegación principal">
                <ul>
                    <li><a href="{{ route('postres.index') }}">Inicio</a></li>
                    <li><a href="{{ route('postres.create') }}" class="btn-cta"> Agregar Postre</a></li>
                </ul>
            </nav>

            <div class="nav-actions" aria-hidden="false">
                <p class="greeting">Holiii</p>
                <p class="theme-label">Tema: Pastel</p>
            </div>
        </div>
    </header>

    <main class="site-main container" role="main">
        @if (session('success'))
            <div class="flash success" role="status">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <aside class="site-aside" role="complementary">
        <section class="aside-card" aria-labelledby="aside-title">
            <h2 id="aside-title">Tip dulce</h2>
            <p>Para mejores presentaciones, añade frutas frescas y decoraciones pequeñas</p>
        </section>
    </aside>

    <footer class="site-footer" role="contentinfo">
        <div class="container footer-inner">
            <address>
                <strong>Mis Postres Mágicos</strong><br>
                Calle Dulce 123 · Ciudad Pastel<br>
                <a href="mailto:contacto@postresmagicos.example">contacto@postresmagicos.example</a>
            </address>
            <p class="copyright">&copy; <time datetime="{{ now()->format('Y') }}">{{ now()->format('Y') }}</time> Mis Postres Mágicos</p>
        </div>
    </footer>
</body>
</html>
