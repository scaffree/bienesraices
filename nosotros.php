<?php
include './includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">

    <h1>
        Conoce Sobre Nosotros
    </h1>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.jpg" type="image/jpg">
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>25 años de experiencia</blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni iure neque odit
                numquam temporibus accusantium unde dolore aperiam est quis minima id vel ducimus aspernatur
                veritatis necessitatibus repudiandae eum ipsam, cupiditate, minus debitis autem ad earum.
                Quos autem velit, suscipit tenetur eius fugiat aliquid reprehenderit perferendis obcaecati
                totam ullam possimus, quas, harum quam! Ducimus at cumque modi laboriosam
                necessitatibus,</p>
            <p>

                nulla, porro obcaecati optio explicabo quasi illum, maiores distinctio tempore? Quae saepe
                odit officiis nostrum eius minus veniam iure qui unde excepturi reiciendis sit assumenda
                impedit numquam, aliquid nulla velit modi non quo et? Porro nesciunt accusamus a obcaecati?
                Nisi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptas nisi libero
                repellat architecto molestias ea minus facilis quia ducimus.</p>
        </div>
        </p>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iusto officiis sit animi suscipit
                dignissimos laboriosam nulla maxime! Adipisci, architecto!</p>
        </div>

        <div class="icono">
            <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iusto officiis sit animi suscipit
                dignissimos laboriosam nulla maxime! Adipisci, architecto!</p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
            <h3>A tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iusto officiis sit animi suscipit
                dignissimos laboriosam nulla maxime! Adipisci, architecto!</p>
        </div>
    </div>
</section>

<?php
incluirTemplate('footer');
?>


<script src="build/js/bundle.min.js"></script>
</body>

</html>