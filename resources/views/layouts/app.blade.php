<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Game Management')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('games.index') }}">
                    <i class="fas fa-gamepad me-2"></i>Game Manager
                </a>
                <div class="navbar-nav ms-auto">
                    <span class="navbar-text me-3">
                        Admin Edison
                    </span>
                    <span class="badge bg-success">
                        <i class="fas fa-user-check me-1"></i>Logged In
                    </span>
                </div>
            </div>
        </nav>

        <!-- Main Content Section -->
        <main class="container py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3 mt-5">
            <div class="container">
                <p class="mb-0">&copy; 2025 Game Management System. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Scripts -->
    <script>
        // Auto-dismiss alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>
    @stack('scripts')
</body>
</html>