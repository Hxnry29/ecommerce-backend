<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de Producto - UNAB Promociones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-detail {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-image {
            max-width: 100%;
            border-radius: 10px;
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
    <nav class="navbar navbar-expand-lg" style="background-color: #fcb900;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1HEKhaOC4s71vYPqSRbSfPeB9oMsuKQUFGw&s"  height="200"> 
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
    
    <header class="bg-white text-black text-center py-5">
        <h1>Detalle de Producto</h1>
        <p>Descubre más sobre esta increíble oferta</p>
    </header>
    
    <section class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="product-image" alt="Producto">
            </div>
            <div class="col-md-6">
                <div class="product-detail">
                    <h2>Descuento en matrículas</h2>
                    <p class="text-muted">Obtén un 10% de descuento en tu matrícula si te inscribes antes del 30 de junio.</p>
                    <p><strong>Beneficios:</strong></p>
                    <ul>
                        <li>Ahorra en tu matrícula.</li>
                        <li>Acceso a todos los servicios universitarios.</li>
                        <li>Facilidades de pago.</li>
                    </ul>
                    <p><strong>Condiciones:</strong></p>
                    <ul>
                        <li>Válido solo para nuevos estudiantes.</li>
                        <li>No acumulable con otras promociones.</li>
                    </ul>
                    <button class="btn btn-primary btn-lg">Aprovechar Oferta</button>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="bg-dark text-white text-center py-3" id="contacto">
        <p>&copy; 2025 UNAB | Contacto: info@unab.edu.co</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>