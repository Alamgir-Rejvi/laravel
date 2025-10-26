<!DOCTYPE html>
<html>
<head>
    <title>Category Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2 class="mb-4">Category → Product → Order (HasOneThrough)</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Order Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->order->name ?? 'No Order Found' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
