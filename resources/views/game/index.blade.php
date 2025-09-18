<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Management Dashboard</title>
    <!-- Bootstrap CSS for nice styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <!-- Dashboard Header -->
        <div class="row bg-dark text-white p-3">
            <div class="col">
                <h1><i class="fas fa-gamepad me-2"></i>Game Dashboard</h1>
            </div>
            <div class="col text-end">
                <a href="{{ url('/') }}" class="btn btn-light btn-sm me-2">
                    <i class="fas fa-home"></i> Home
                </a>
                <span class="me-3">Admin Edison</span>
                <span class="badge bg-success">You're logged in!</span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row mt-4">
            <div class="col-12">
                <!-- Action Buttons -->
                <div class="d-flex justify-content-between mb-4">
                    <h2><i class="fas fa-table me-2"></i>Games Table</h2>
                    <a href="{{ route('games.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-1"></i>Add New Game
                    </a>
                </div>

                <!-- Games Table -->
                <div class="card">
                    <div class="card-body d-flex align-items-start gap-4">
                        <div class="flex-grow-1">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Game Title</th>
                                            <th>Genre</th>
                                            <th>Rating</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($games as $game)
                                            <tr>
                                                <td>{{ $game->id }}</td>
                                                <td>{{ $game->name }}</td>
                                                <td>{{ $game->genre }}</td>
                                                <td>{{ $game->rating }}</td>
                                                <td>{{ $game->created_at->format('M d, Y') }}</td>
                                                <td>{{ $game->updated_at->format('M d, Y') }}</td>
                                                <td>
                                                    <!-- VIEW Button -->
                                                    <a href="{{ route('games.show', $game) }}" class="btn btn-info btn-sm" title="View">
                                                        <i class="fas fa-eye"></i>
                                                    </a>

                                                    <!-- EDIT Button -->
                                                    <a href="{{ route('games.edit', $game) }}" class="btn btn-warning btn-sm" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <!-- DELETE Button -->
                                                    <form action="{{ route('games.destroy', $game) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this game?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="12" class="text-center text-muted py-4">
                                                    <i class="fas fa-gamepad fa-2x mb-2"></i>
                                                    <p>No games found. <a href="{{ route('games.create') }}">Create the first game!</a></p>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('images/dashboard/Deep_rock_galactic_cover_art.jpg') }}" alt="Game Image" width="240" height="240" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript for interactivity -->
    <script>
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                new bootstrap.Alert(alert).close();
            });
        }, 5000);

        // Enhanced delete confirmation
        document.querySelectorAll('form[onsubmit]').forEach(form => {
            form.onsubmit = function(e) {
                const gameTitle = this.closest('tr').querySelector('td:nth-child(2)').textContent;
                return confirm(`Are you sure you want to delete "${gameTitle.trim()}"?`);
            };
        });
    </script>
</body>
</html>