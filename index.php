<?php
$inicio = true;
include './templates/header.php'

?>

<main class="contenedor">
    <h1>Mas Sobre Nosotros</h1>
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
</main>
<section class="section contenedor">
    <h2>Casas y Departamentos en Venta</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p> Casa deñ lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3.000.000</p>
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
                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>

            </div> <!-- contenido-anuncio-->
        </div> <!-- anuncio-->

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa terminados de Lujo</h3>
                <p> Casa deñ lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3.800.000</p>
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
                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>

            </div> <!-- contenido-anuncio-->
        </div> <!-- anuncio-->

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa Con Piscina Privada</h3>
                <p> Casa deñ lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$4.100.000</p>
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
                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>

            </div> <!-- contenido-anuncio-->
        </div> <!-- anuncio-->

    </div> <!-- contenedor-anuncio-->
    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la Casa de tus sueños.</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo"> Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>
                        Terraza en el techo de tu casa
                    </h4>
                    <p class="informacion-meta">
                        Escrito el : <span>03/04/2022</span> por: <span>Sebastian</span>
                    </p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>
                        Guia para la decoración de tu hogar
                    </h4>
                    <p class="informacion-meta">
                        Escrito el : <span>03/04/2022</span> por: <span>Sebastian</span>
                    </p>
                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para
                        darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimonios">
        <h3>Testimonios</h3>
        <div class="testimonio">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron
                cumple todas mis expectativas
            </blockquote>
            <p> -Patricio Reyes</p>
        </div>
    </section>

</div>
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