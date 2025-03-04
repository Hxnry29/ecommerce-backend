@extends('layout.app')

@section('content')
    
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


@endsection
    
