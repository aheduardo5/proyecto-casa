<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro blog</h1>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="Text Entrada Blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                    ahorrando dinero</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog2.webp" type="image/webp">
                <source srcset="build/img/blog2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog2.jpg" alt="Text Entrada Blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Construye una alberca en tu hogar</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para
                    darle vida a tu espacio</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog3.jpg" alt="Text Entrada Blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Guía para la decoración de tu hogar</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para
                    darle vida a tu espacio</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog4.jpg" alt="Text Entrada Blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Guía para la decoración de tu habitacion</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para
                    darle vida a tu espacio</p>
            </a>
        </div>
    </article>

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