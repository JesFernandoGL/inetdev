<header class="header"><!-- Seccion Header -->
        <div class="contenedor header-content">
            <div class="logo-content">
                <a href="index.php"><img src="img/logo_inet_h.png" alt="logo_inet"></a>
            </div>
            <div id="menu-btn" class="menu-btn">Menú
                <div class="menu-icon">
                    <span class="lin1"></span>
                    <span class="lin2"></span>
                    <span class="lin3"></span>
                </div>
            </div>
            <nav class="menu" id="menu">
                <ul>
                    <li><a href="planes.php" class="<?php echo $activo = $page == 'planes' ? 'active' : '' ?>">Planes</a></li>
                    <li><a href="productosyservicios.php" class="<?php echo $activo = $page == 'productosyservicios' ? 'active' : '' ?>">Productos y Servicios</a>
                        <ul>
                            <li><a href="productosyservicios.php#sec-productos">Productos</a></li>
                            <li><a href="productosyservicios.php#sec-servicios">Servicios</a></li>
                        </ul>                    
                    </li>
                    <li><a href="soporte.php" class="<?php echo $activo = $page == 'soporte' ? 'active' : '' ?>">Soporte</a></li>
                    <li><a href="nosotros.php" class="<?php echo $activo = $page == 'nosotros' ? 'active' : '' ?>">Nosotros</a></li>
                    <li><a href="contacto.php" class="<?php echo $activo = $page == 'contacto' ? 'active' : '' ?>">Contacto</a></li>
                    <li><a href="fundacion.php" class="<?php echo $activo = $page == 'fundacion' ? 'active' : '' ?>">Socialmente Responsable</a></li>
                </ul>                  
            </nav>
        </div>
    </header>