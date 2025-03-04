@extends('layout.app')

@section('content')
    
    <header class="bg-white text-black text-center py-5">
        <h1>Bienvenido a UNAB Promociones</h1>
        <p>Descubre las mejores ofertas y beneficios para la comunidad UNAB</p>
    </header>
    
    <section id="promociones" class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="card-img-top" alt="Promoción 1">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en matrículas</h5>
                        <p class="card-text">Obtén un 10% de descuento en tu matrícula si te inscribes antes del 30 de junio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="card-img-top" alt="Promoción 2">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en cursos</h5>
                        <p class="card-text">Accede a cursos extracurriculares con un 15% de descuento para estudiantes de la UNAB.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://img.freepik.com/vector-gratis/wow-palabra-sobre-explosion-bomba-aislada_1308-56045.jpg?ga=GA1.1.1720309227.1692252065&semt=ais_hybrid" class="card-img-top" alt="Promoción 3">
                    <div class="card-body">
                        <h5 class="card-title">Beneficios en librería</h5>
                        <p class="card-text">Compra tus libros con un 20% de descuento en la librería de la universidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
    
