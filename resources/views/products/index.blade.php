<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Productos - UNAB Promociones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .product-image {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            max-width: 100%;
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
        <h1>Listado de Productos</h1>
        <p>Explora nuestras increíbles promociones y beneficios</p>
    </header>

    <!-- Listado de Productos -->
    <section id="promociones" class="container py-5">
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="product-image" alt="Promoción 1">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en matrículas</h5>
                        <p class="card-text">Obtén un 10% de descuento en tu matrícula si te inscribes antes del 30 de junio.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="product-image" alt="Promoción 2">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en cursos</h5>
                        <p class="card-text">Accede a cursos extracurriculares con un 15% de descuento para estudiantes de la UNAB.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="product-image" alt="Promoción 3">
                    <div class="card-body">
                        <h5 class="card-title">Beneficios en librería</h5>
                        <p class="card-text">Compra tus libros con un 20% de descuento en la librería de la universidad.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="product-image" alt="Promoción 4">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en transporte</h5>
                        <p class="card-text">Obtén un 30% de descuento en el transporte universitario durante el primer semestre.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="product-image" alt="Promoción 5">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en cafetería</h5>
                        <p class="card-text">Disfruta de un 10% de descuento en todos los productos de la cafetería universitaria.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="product-image" alt="Promoción 6">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en eventos</h5>
                        <p class="card-text">Accede a eventos culturales y deportivos con un 25% de descuento.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
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