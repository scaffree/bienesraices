<?php
include './includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
    </picture>

    <h2>Llene el formulario de Contacto</h2>
    <form class="formulario">
        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Ingrese su nombre" id="nombre">

            <label for="email">Nombre</label>
            <input type="email" placeholder="Ingrese su Email" id="email">

            <label for="telefono">Nombre</label>
            <input type="tel" placeholder="Ingrese su Telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion sobre la Propiedad</legend>

            <label for="opciones">Vende o Compra</label>
            <select id="opciones">
                <option value="" disabled selected>--Seleccione</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" id="presupuesto" placeholder="Tu Precio o Presupuesto">

        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" value="Telefono" id="contactar-telefono">

                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="Email" id="contactar-email">
            </div>
            <p>Si eligió teléfono, elija la fecha y la hora</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="telefono">

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00">
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>

<script src="build/js/bundle.min.js"></script>
</body>

</html>