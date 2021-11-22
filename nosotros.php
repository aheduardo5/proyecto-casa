<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia deleniti possimus ipsa tempore sunt
                optio provident consequuntur dicta hic consectetur, aliquid deserunt ipsum. Omnis, inventore.
                Pariatur fugiat perspiciatis animi dicta?Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Adipisci sit iusto nemo laboriosam eaque placeat, aperiam hic nihil ad obcaecati molestias sapiente
                tenetur, doloribus molestiae aliquid maxime atque, modi dignissimos! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Facilis ullam aliquid sed unde ipsum. Labore veniam quod perspiciatis
                enim ullam, ipsum eveniet culpa eligendi rem ducimus eaque harum animi exercitationem! Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Nobis non voluptatibus magnam magni, totam accusamus
                nam provident quod.
            </p>
        </div>
    </div>
</main>
<section class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates incidunt, iure expedita quia
                suscipit sunt dolorem.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates incidunt, iure expedita quia
                suscipit sunt dolorem.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiemppo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates incidunt, iure expedita quia
                suscipit sunt dolorem.</p>
        </div>
    </div>
</section>

<?php
    include 'includes/templates/footer.php';
?>



<script src="build/js/bundle.min.js"></script>
</body>

</html>