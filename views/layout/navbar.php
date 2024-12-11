<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <!-- Logo -->
        <a class="navbar-brand col-5 d-none d-sm-none d-md-none d-lg-block d-xl-block" href="<?= baseUrl ?>">
            <img src="<?= baseUrl ?>assets/img/brosbike/logo_blancoNEGRO.png" alt="icono1"  class=" w-50 align-top">
        </a>
        <a class="navbar-brand col-5 d-block d-sm-block d-md-block d-lg-none d-xl-none" href="<?= baseUrl ?>">
            <img src="<?= baseUrl ?>assets/img/brosbike/logo_blancoNEGRO.png" alt="icono1"  class="w-75 align-top">
        </a>
        
        <!-- Toggler Button (visible solo en pantallas pequeñas) -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar Links (en pantallas grandes se expanden, en pantallas pequeñas se colapsan) -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item mt-2"><a class="nav-link text-white" href="#about">Nosotros</a></li>
                <li class="nav-item mt-2"><a class="nav-link text-white" href="#services">Servicios</a></li>
                <li class="nav-item mt-2"><a class="nav-link text-white" href="<?= baseUrl ?>home/shopBrosBike">Tienda</a></li>
                <li class="nav-item mt-2"><a class="nav-link text-white" href="#portfolio">Parners</a></li>
                <li class="nav-item mt-2"><a class="nav-link text-white" href="#contact">Contacto</a></li>
                
                <!-- Iconos -->
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="#contact">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="#contact">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>