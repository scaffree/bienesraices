<?php include './templates/header.php' ?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="casa frente al bosque">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">
                $3.000.000
            </p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" loading="lazy" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" loading="lazy" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid iste, quo aperiam architecto consequatur
                labore, hic voluptatem doloremque a quibusdam ut officiis. Sequi omnis vitae reprehenderit doloremque
                officia provident suscipit. Molestias sequi magnam reiciendis a fuga voluptatem obcaecati sapiente porro
                quibusdam nisi vel iure dignissimos veritatis repellat, doloremque incidunt atque quia libero cupiditate
                animi, voluptates quis odio quisquam. Aperiam doloribus fugit magnam! Nostrum nulla quam atque modi,
                sunt necessitatibus perferendis iusto pariatur consequuntur, dicta voluptate accusamus natus possimus
                dolores. Facere eligendi possimus ipsam ut eum! Temporibus, autem, excepturi fugiat nihil molestiae
                illum vel sit non dolorem perspiciatis iure debitis nobis.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius dolore enim consequatur in reiciendis
                magnam eaque, ut, quam sit autem voluptatem ullam magni. Repellendus hic aperiam ipsum iure excepturi
                saepe ad numquam illo eum incidunt blanditiis, sunt at molestias autem quasi labore alias quibusdam
                fugiat, magni itaque, nostrum veritatis odit enim facilis! Corporis qui earum cupiditate ipsum at? Ipsa
                dicta voluptate ducimus rem quam ipsum praesentium nam, cumque in molestias ex fugiat consequatur.
                Voluptate, ratione.</p>
        </div>

    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contactos.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">
            Derechos reservador Sebastian Caffre &copy;
        </p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>

</html>