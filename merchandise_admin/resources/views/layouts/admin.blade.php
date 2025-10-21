<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Merchandiser Management Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        {{-- Sidebar --}}
        @include('admin.sidebar')

        {{-- Main content --}}
        <main class="flex-grow-1 p-4" style="background:#f8f9fa;">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
