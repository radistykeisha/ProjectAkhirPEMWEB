<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batik Singhasari</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .btn-batik {
            background-color: #8B4513;
            color: white;
        }

        .btn-batik:hover {
            background-color: #654321;
            color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">
                Batik Singhasari
            </a>
        </div>
    </nav>

    @yield('content')

</body>
</html>