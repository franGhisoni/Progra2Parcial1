<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NATURE - Skincare</title>
    
    <!-- Agrega Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <!-- Contenido de tu página -->
    <main class="main">
        <!-- Navbar -->
        <section class="navbar">
            <!-- Logo -->
            <a href="index.html">
                <div class="logo"> 
                    <h1>NATURE</h1>
                </div>
            </a>
            
            <!-- Menú de navegación -->
            <div class="secciones">
                <ul class="listaNav">
                    <li><a href="skincare.html">Skincare</a></li>
                    <li><a href="#">Makeup</a></li>
                    <li><a href="#">Hair</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            
            <!-- Botones de bolsa y favoritos -->
            <div class="shop">
                <button class="bag">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                    </svg>
                </button>
                <button class="fav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.920 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </button>
            </div>
        </section>
        
        <!-- Banner -->
        <div class="banner">
            <img class="background" src="img/vista-productos-belleza-masculinos-pantalla-roca-o-piedra (2).jpg" alt="">
            <div class="info">
                <h2>Diseñado para realzar tu belleza</h2>
                <p class="pExplore">En NATURE, creemos en realzar tu belleza natural. Nuestra gama de productos de belleza de alta calidad está diseñada para hacerte sentir segura y radiante en cada momento. Únete a nosotros y descubre tu mejor versión.</p>
                <p><a class="explore" href="explore">EXPLORE</a></p>
            </div>
        </div>
        
    </main>
    
    <!-- Grilla de productos con desplegables para filtrar -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">

                <div class="container mt-5">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Ingredientes
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">Opción 1</li>
                                        <li class="list-group-item">Opción 2</li>
                                        <li class="list-group-item">Opción 3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Usos
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">Opción A</li>
                                        <li class="list-group-item">Opción B</li>
                                        <li class="list-group-item">Opción C</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Grilla de productos -->
            <div class="col-md-9">
                <div class="row">
                    <!-- Aquí puedes iterar sobre tus productos y mostrarlos -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Producto 1</h5>
                                <p class="card-text">Descripción corta del producto.</p>
                                <a href="#" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Producto 1</h5>
                                <p class="card-text">Descripción corta del producto.</p>
                                <a href="#" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Producto 1</h5>
                                <p class="card-text">Descripción corta del producto.</p>
                                <a href="#" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Producto 1</h5>
                                <p class="card-text">Descripción corta del producto.</p>
                                <a href="#" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Producto 1</h5>
                                <p class="card-text">Descripción corta del producto.</p>
                                <a href="#" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Producto 1</h5>
                                <p class="card-text">Descripción corta del producto.</p>
                                <a href="#" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Producto 1</h5>
                                <p class="card-text">Descripción corta del producto.</p>
                                <a href="#" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nombre del Producto 1</h5>
                                <p class="card-text">Descripción corta del producto.</p>
                                <a href="#" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repite este bloque para cada producto -->
                </div>
            </div>
        </div>
    </div>




        <footer class="footer">
            <div class="footerLogo">
                <h5>NATURE</h5>
            </div>
            <div>
                <ul class="footerUl">
                    <li><a href="">Legal</a></li>
                    <li><a href="">Terms</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Cookies</a></li>
                </ul>
            </div>
            <div>
                <p>Todos los derehos reservados 2023</p>
            </div>
        </footer>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>