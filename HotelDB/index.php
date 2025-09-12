<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Sol&Mar - Gestão de Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background: linear-gradient(135deg, #1e88e5, #0d47a1);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        .status-ativa {
            color: #28a745;
            font-weight: bold;
        }
        .status-cancelada {
            color: #dc3545;
            font-weight: bold;
        }
        .btn-action {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1 class="display-4"><i class="bi bi-building"></i> Hotel Sol&Mar</h1>
            <p class="lead">Sistema de Gestão de Reservas</p>
        </div>
    </div>

    <div class="container">
        <?php include 'connection.php'; ?>
        <?php include 'crud/read.php'; ?>
    </div>

    <footer class="mt-5 py-3 bg-light">
        <div class="container text-center">
            <p class="mb-0">© 2023 Hotel Sol&Mar - Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>