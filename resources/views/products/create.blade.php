<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto - UNAB Promociones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #fcb900;
            border-color: #fcb900;
        }
        .btn-primary:hover {
            background-color: #e0a800;
            border-color: #e0a800;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #fcb900;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1HEKhaOC4s71vYPqSRbSfPeB9oMsuKQUFGw&s" height="200"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#promociones">Promociones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-white text-black text-center py-5">
        <h1>Crear Producto</h1>
        <p>Ingresa los detalles del producto para agregarlo a las promociones</p>
    </header>

    <!-- Formulario para Crear Producto -->
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <form>
                        <!-- Nombre del Producto -->
                        <div class="mb-3">
                            <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombreProducto" placeholder="Ej: Descuento en matrículas" required>
                        </div>
                        <!-- Descripción del Producto -->
                        <div class="mb-3">
                            <label for="descripcionProducto" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcionProducto" rows="3" placeholder="Ej: Obtén un 10% de descuento en tu matrícula si te inscribes antes del 30 de junio." required></textarea>
                        </div>
                        <!-- Precio del Producto -->
                        <div class="mb-3">
                            <label for="precioProducto" class="form-label">Precio (opcional)</label>
                            <input type="number" class="form-control" id="precioProducto" placeholder="Ej: 100.000">
                        </div>
                        <!-- Imagen del Producto -->
                        <div class="mb-3">
                            <label for="imagenProducto" class="form-label">Imagen del Producto</label>
                            <input type="url" class="form-control" id="imagenProducto" placeholder="Ej: https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg" required>
                        </div>
                        <!-- Botón para Enviar -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Crear Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3" id="contacto">
        <p>&copy; 2025 UNAB | Contacto: info@unab.edu.co</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>