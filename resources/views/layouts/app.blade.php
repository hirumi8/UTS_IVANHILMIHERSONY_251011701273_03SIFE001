<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Galeri Lukisan Digital')</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root {
            --bg-lavender: #f3effc;
            --purple-electric: #7c3aed;
            --purple-dark: #5b21b6;
            --coral-pink: #fb7185;
            --lime-green: #a3e635;
            --text-dark: #1e1b4b;
            --card-bg: #ffffff;
        }

        body {
            background-color: var(--bg-lavender);
            color: var(--text-dark);
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            overflow-x: hidden;
        }

        .navbar-playground {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(124, 58, 237, 0.1);
        }

        .navbar-brand {
            font-weight: 800;
            letter-spacing: -0.03em;
            color: var(--purple-electric) !important;
            font-size: 1.35rem;
        }

        .nav-link {
            font-weight: 600;
            color: var(--text-dark) !important;
            transition: color 0.2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--purple-electric) !important;
        }

        .btn-electric {
            background-color: var(--purple-electric);
            color: #ffffff;
            font-weight: 600;
            border-radius: 50rem;
            padding: 0.6rem 1.5rem;
            border: none;
            transition: all 0.25s ease;
        }

        .btn-electric:hover {
            background-color: var(--purple-dark);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(124, 58, 237, 0.25);
        }

        .btn-outline-electric {
            color: var(--purple-electric);
            border: 2px solid var(--purple-electric);
            font-weight: 600;
            border-radius: 50rem;
            padding: 0.55rem 1.5rem;
            background: transparent;
            transition: all 0.25s ease;
        }

        .btn-outline-electric:hover {
            background-color: var(--purple-electric);
            color: #ffffff;
            transform: translateY(-2px);
        }

        .card-playground {
            background-color: var(--card-bg);
            border: 1px solid rgba(124, 58, 237, 0.08);
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 10px 30px -10px rgba(124, 58, 237, 0.08);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .card-playground:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -15px rgba(124, 58, 237, 0.18);
        }

        .badge-tag {
            background-color: rgba(124, 58, 237, 0.1);
            color: var(--purple-electric);
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.35rem 0.85rem;
            border-radius: 50rem;
        }

        .badge-coral {
            background-color: rgba(251, 113, 133, 0.12);
            color: #e11d48;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.35rem 0.85rem;
            border-radius: 50rem;
        }

        footer {
            background-color: #1e1b4b;
            color: #c7d2fe;
            border-top: 1px solid rgba(124, 58, 237, 0.2);
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-playground sticky-top py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('digital_art.welcome') }}">
                <span style="display: inline-block; width: 10px; height: 10px; background-color: var(--purple-electric); border-radius: 50%; margin-right: 6px;"></span>
                DigitalArt Playground
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('digital_art.welcome') ? 'active' : '' }}" href="{{ route('digital_art.welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('digital_art.index') || request()->routeIs('digital_art.show') ? 'active' : '' }}" href="{{ route('digital_art.index') }}">Galeri</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a href="{{ route('digital_art.index') }}" class="btn btn-electric btn-sm px-3 py-2">Jelajahi Karya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5 flex-grow-1">
        @yield('content')
    </main>

    <footer class="text-center py-4 mt-auto">
        <div class="container">
            <p class="mb-0 small fw-medium">&copy; 2026 Galeri Lukisan Digital. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>