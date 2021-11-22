<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta frente al Bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
    </picture>
    <div class="resumen-propiedad">
        <p class="precio">$3,000,00.00</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img src="build/img/icono_wc.svg" alt="icono wc" loadin="lazy">
                <p>3</p>
            </li>
            <li>
                <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loadin="lazy">
                <p>3</p>
            </li>
            <li>
                <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loadin="lazy">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius fugiat, accusamus, fuga sint soluta
            maiores earum quas laboriosam ullam dolorem nam quae maxime voluptates, deleniti expedita dignissimos
            facere voluptatibus atque! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi explicabo,
            quos, asperiores voluptate nostrum aperiam iusto doloribus atque nihil id voluptatibus, sint eos unde
            expedita aspernatur incidunt libero quis dolorum!|</p>
    </div>
</main>

<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a href="Nosotros.php">Nosotros</a>
            <a href="Anuncios.php">Anuncios</a>
            <a href="Blog.php">Blog</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </div>
    <p class="copyright">Todos los Derechos Reservados 2021 &copy</p>
</footer>



<script src="build/js/bundle.min.js"></script>
</body>

</html>