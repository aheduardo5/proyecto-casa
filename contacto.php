<?php include 'includes/templates/header.php'; ?>
<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" tpye="image/webp">
        <source srcset="build/img/destacada3.jpg" tpye="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
    </picture>

    <h2>Llene el formulario de Contacto</h2>
    <form class="formulario">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">

            <label for="e-mail">E-mail</label>
            <input type="email" placeholder="Tu E-mail" id="e-mail">

            <label for="telefono">Telefono</label>
            <input type="tel" placeholder="Tu Telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea name="" id="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <label for="opciones">Vende o compra</label>
            <select name="" id="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" placeholder="Tu Telefono" id="contactar-telefono">

                <label for="telefono">E-mail</label>
                <input name="contacto" type="radio" placeholder="Tu E-mail" id="contactar-email">
            </div>

            <p>Si eligio teléfono, elija la fecha y la hora para ser contactado</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php
include 'includes/templates/footer.php';
?>


<script src="build/js/bundle.min.js"></script>
</body>

</html>