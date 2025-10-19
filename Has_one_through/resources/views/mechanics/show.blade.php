<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mechanic Details</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .box { border: 1px solid #ddd; padding: 20px; width: 400px; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h1>Mechanic Details</h1>

    <div class="box">
        <p><strong>ID:</strong> {{ $mechanic->id }}</p>
        <p><strong>Name:</strong> {{ $mechanic->name }}</p>
        <p><strong>Car Model:</strong> {{ optional($mechanic->car)->model ?? 'No car' }}</p>
        <p><strong>Owner Name:</strong> {{ optional($mechanic->owner)->name ?? 'No owner' }}</p>
    </div>

    <p><a href="{{ route('mechanics.index') }}">← Back to list</a></p>
</body>
</html>
