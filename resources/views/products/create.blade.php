@extends('layout.app')

@section('content')
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



@endsection