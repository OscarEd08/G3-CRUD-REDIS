<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script>src="index.js"</script>
</head>
<body>
    <div class="container-fluid mt-2">
        <div class="container-fluid p-5 mb-4 bg-dark text-white">
            <h1>CRUD - REDIS</h1>
        </div>
        <div class="container-fluid mb-5 text-center">
            <?php require_once 'crud/select.php'; ?>
        </div>
        <div class="container mt-5 mb-5">
            <?php require_once 'crud/insert.php'; ?>
        </div>
    </div>
</body>
</html>
