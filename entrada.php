<?php

require 'includes/funciones.php';


incluirTemplate('header');

?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoración de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
    </picture>
    <p class="informacion-meta">Esrito el <span>20-10-2021</span> por: <span>Admin</span></p>
    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius fugiat, accusamus, fuga sint soluta
            maiores earum quas laboriosam ullam dolorem nam quae maxime voluptates, deleniti expedita dignissimos
            facere voluptatibus atque! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi explicabo,
            quos, asperiores voluptate nostrum aperiam iusto doloribus atque nihil id voluptatibus, sint eos unde
            expedita aspernatur incidunt libero quis dolorum!|</p>
    </div>
</main>

<?php
incluirTemplate('footer');
?>


<script src="build/js/bundle.min.js"></script>
</body>

</html>