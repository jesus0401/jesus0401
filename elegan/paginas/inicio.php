<?php
require_once 'paginas/header.php';
require_once "dependencias.php"
?>
<head>
<title>Inicio</title>
</head>
<body class="home-page" style="margin-top: -30em;">
<main style="margin-top: 30em;">
        <!--Main Slider: Begin-->
        <div class="home-slidershow">
            <div class="slide-show">
                <div class="vt-slideshow">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            < <img src="assets/img/slider/slide-1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption skewfromrightshort fadeout" data-x="right" data-hoffset="-370" data-y="340" data-speed="500" data-start="1200" data-easing="Power4.easeOut"><img src="assets/img/slider/slide-1-lay1.png" alt="" style="margin-right:-9em;">
                            </div>
                            <div class="tp-caption skewfromrightshort fadeout slide-color" data-x="right" data-hoffset="-400" data-y="550" data-speed="500" data-start="1200" data-easing="Power4.easeOut" style="margin-right:-8em;">
                            </div>

                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/slider/slide-2.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption skewfromrightshort fadeout" data-x="left" data-hoffset="500" data-y="350" data-speed="500" data-start="1200" data-easing="Power4.easeOut"><img src="assets/img/slider/slide-1-lay1.png" alt="" style="margin-left: 30em;">
                            </div>
                            <div class="tp-caption skewfromrightshort fadeout slide-color" data-x="left" data-hoffset="500" data-y="550" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                            </div>
                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/slider/slide-3.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption skewfromrightshort fadeout" data-x="700" data-y="350" data-speed="500" data-start="1200" data-easing="Power4.easeOut"><img src="assets/img/slider/slide-1-lay2.png" alt="" style="margin-left: -10em;">
                            </div>
                            <div class="tp-caption skewfromrightshort fadeout slide-color-2" data-x="700" data-y="550" data-speed="500" data-start="1200" data-easing="Power4.easeOut" style="margin-left: -5em;">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Main Slider: End-->
        <!-- New Product: Begin  -->
        <section class="new-products container">
            <div class="section-header">
                <div class="section-title">
                    <h2>Nuevos Productos</h2></div>
                <h3 class="section-subtitle">Productos de calidad</h3>
                <h5 class="section-small-subtitle">Buscando lo último? Lo nuevo está aquí, no hace falta adivinar.</h5>
            </div>
           
        </section>
        <!-- New Product: End -->
        <!-- New Featured Product: Begin -->
        <section class="new-featured-product container-fluid">
            <div class="row">
                <div class="meta-wrap">
                    <div class="meta">
                        <p><img src="assets/img/imagen22.png" alt="New featured" style="height:100px;"></p>
                        <h2>Recien agregado</h2>
                        <p>Buscando lo último? El nuevo material está aquí, sin necesidad de conjeturas</p>
                        <p class="jw-button"><a href="?p=product-details">compra ahora </a></p>
                    </div>
                </div>
                <div class="thumb">
                    <a href="?p=product-details">
                        <img src="assets/img/aretes20.png" alt="New featured Product">
                    </a>
                </div>
            </div>
        </section>
        <!-- New Featured Product: End -->
        <!-- Featured Category List: Begin -->
        <section class="featured-category-wrap container-fluid">
            <div class="section-header">
                <div class="section-title">
                    <h2>Compras Elegantes</h2></div>
                <h3 class="section-subtitle">El poder de la belleza</h3>
                <h5 class="section-small-subtitle">El Elegan rinde homenaje a la tradición de joyería fina y más temporal. Tanto para hombres como para mujeres, cada modelo se fabrica en oro rosa o blanco bellamente combinando pureza y elegancia.</h5>
            </div>
            <div class="row">
                <div class="section-main">
                    <!-- Featured Categories: Begin -->
                    <ul class="featured-categories">
                        <li class="featured-category">
                            <img src="assets/img/category/category-1.jpg" alt="Featured Category">
                            <div class="featured-category-details">
                                <div class="details">
                                    <h3 class="title"><a href="?p=category-grid">Aretes de plata cortos</a></h3>
                                    <p class="description">Aretes de plata cortos una gran eleccion para cualquier momento especial. </p>
                                    <p class="jw-button"><a href="?p=category-grid">ordenar ahora</a></p>
                                </div>
                            </div>
                        </li>
                        <li class="featured-category">
                            <img src="assets/img/category/category-2.jpg" alt="Featured Category">
                            <div class="featured-category-details">
                                <div class="details">
                                    <h3 class="title"><a href="?p=category-grid">Aretes de plata largos</a></h3>
                                    <p class="description">Aretes de plata largos gran diseño, no incomoda y es super elegante. </p>
                                    <p class="jw-button"><a href="?p=category-grid">ordenar ahora </a></p>
                                </div>
                            </div>
                        </li>
                        <li class="featured-category">
                            <img src="assets/img/category/category-3.jpg" alt="Featured Category">
                            <div class="featured-category-details">
                                <div class="details">
                                    <h3 class="title"><a href="?p=category-grid">Anillos de oro</a></h3>
                                    <p class="description">Anillos de oro de 18k gran variedad para tus gustos y de gran calidad.</p>
                                    <p class="jw-button"><a href="?p=category-grid">ordenar ahora</a></p>
                                </div>
                            </div>
                        </li>
                        <li class="featured-category">
                            <img src="assets/img/category/category-4.jpg" alt="Featured Category">
                            <div class="featured-category-details">
                                <div class="details">
                                    <h3 class="title"><a href="?p=category-grid">Set completo</a></h3>
                                    <p class="description">Set completo de collar mas aretes de plata llevate el set y completa tu moda.</p>
                                    <p class="jw-button"><a href="?p=category-grid">ordenar ahora</a></p>
                                </div>
                            </div>
                        </li>
                        <li class="featured-category">
                            <img src="assets/img/category/category-5.jpg" alt="Featured Category">
                            <div class="featured-category-details">
                                <div class="details">
                                    <h3 class="title"><a href="?p=category-grid">Variedad de joyeria</a></h3>
                                    <p class="description">Tenemos en nuestras tiendas la mejor calidad y variedad de joyas en oro y plata.</p>
                                    <p class="jw-button"><a href="?p=category-grid">ordenar ahora </a></p>
                                </div>
                            </div>
                        </li>
                        <li class="featured-category">
                            <img src="assets/img/category/category-6.jpg" alt="Featured Category">
                            <div class="featured-category-details">
                                <div class="details">
                                    <h3 class="title"><a href="?p=category-grid">Collares a tu medida</a></h3>
                                    <p class="description">Collares y aretes de gran duracion y muy comodos.</p>
                                    <p class="jw-button"><a href="?p=category-grid">ordenar ahora</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Featured Categories: End -->
                </div>
            </div>
        </section>
        <!-- Featured Category List: End -->
        <!-- Blog Posts: Begin -->
        <section class="blog-posts-home container">
            <div class="section-header">
                <div class="section-title">
                    <h2>Compra Moderna</h2></div>
                <h3 class="section-subtitle">Nuestros Blogs</h3>
                <h5 class="section-small-subtitle"></h5>
            </div>
            <div class="row">
                <ul class="blog-posts clear">
                    <li class="blog-post">
                        <div class="blog-thumb img-hover">
                            <a href="?p=blog-details"><img src="assets/img/blog-1.jpg" alt="blog 1"></a>
                        </div>
                        <div class="blog-date">
                            <span>02</span>
                            <p>March</p>
                        </div>
                        <div class="blog-details">
                            <h4 class="blog-title"><a href="?p=blog-details">Viernes Relajado</a></h4>
                            <p class="blog-meta">Post Propio/ Comentarios</p>
                            <p style="text-align:center">Pero la colocación de la gavilla a todo este negocio equivocado estaba reservada para el científico Frederick Cuvier, hermano del famoso barón. En 1836, publicó una Historia Natural.</p>
                        </div>
                    </li>
                    <li class="blog-post">
                        <div class="blog-thumb img-hover">
                            <a href="?p=blog-details"><img src="assets/img/blog-2.jpg" alt="blog 2"></a>
                        </div>
                        <div class="blog-date">
                            <span>23</span>
                            <p>March</p>
                        </div>
                        <div class="blog-details">
                            <h4 class="blog-title"><a href="?p=blog-details">La historia hermosa</a></h4>
                            <p class="blog-meta">Post Propio / Comentarios</p>
                            <p style="text-align:center">Fundada en la ciudad de Nueva York en 1932, por el Sr. Harry, un gemólogo innato, un hombre de negocios intuitivo y un filántropo dedicado, la marca continúa estableciendo el estándar para lo último</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Blog Posts: End -->
        <!-- Hero Image: Begin -->
        <section class="hero-image img-hover">
            <div class="hero-image-text">
                <h2 style="margin-left: -1em;">Clase</h2>
                <img src="assets/img/icon-parallax.png" alt="diamon parallax">
                <h2>Elegancia</h2>
            </div>
        </section>
        <!-- Hero Image: End -->
        <!-- Team Member: Begin -->
        
        <!-- Team Member: End -->
        <!-- Grayscale Collection: Begin -->
        <section class="grayscale-collection-wrap">
            <div class="collection-header">
                <img src="assets/img/diamond.png" alt="diamond">
                <h2>Colecciones:</h2>
                <p>Diferentes tipos de joyeria en plata, oro y muchas opciones de alta calidad.</p>
            </div>
            <div class="collection-wrap container clear">
                <div class="collection clear">
                    <img src="assets/img/collection/collection-1.png" alt="collection" class="grayscale" id="collection-1">
                    <img src="assets/img/collection/collection-2-1.jpg" alt="collection" class="grayscale" id="collection-2">
                    <img src="assets/img/collection/collection-3-1.jpg" alt="collection" class="grayscale" id="collection-3">
                    <img src="assets/img/collection/collection-5-1.jpg" alt="collection" class="grayscale" id="collection-4">
                    <img src="assets/img/collection/collection-6-1.jpg" alt="collection" class="grayscale" id="collection-5">
                </div>
            </div>
        </section>
        <!-- Grayscale Collection: End -->
        <!-- Register Newsletter: Begin -->
        <div class="register-newsletter">
            <div class="container">
                <div class="row">
                    <div class="register-wrap">
                        <span class="head">Hoja informativa:</span>
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ingrese su email ">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">enviar</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Newsletter: End -->
        <!-- Contact Section: Begin -->
        <section class="contact-location container">
            <div class="row">
                <!-- Contact: Begin -->
                <div class="contact">
                    <h3>Contacto:</h3>
                    <form action="#" method="post">
                        <div class="form-group msg_name">
                            <input type="text" class="form-control" id="msg_name" name="msg_name" placeholder="tu nombre*">
                        </div>
                        <div class="form-group msg_email">
                            <input type="email" class="form-control" id="msg_email" name="msg_email" placeholder="tu email*">
                        </div>
                        <div class="form-group msg_phone">
                            <input type="text" class="form-control" id="msg_phone" name="msg_phone" placeholder="tu telefono*">
                        </div>
                        <div class="form-group msg_message">
                            <textarea class="form-control" name="msg_message" id="msg_message" placeholder="Comentarios*" rows="8"></textarea>
                        </div>
                        <button type="submit" class="jw-button">Enviar Mensaje</button>
                    </form>
                </div>
                <!-- Contact: End -->
                <!-- Location: Begin -->
                <div class="location">
                    <h3>Ubicacion:</h3>
                    <div class="img-hover">
                        <img src="assets/img/location.jpg" alt="Location">
                    </div>
                    <p>
                        <span class="icon icon-phone"></span>
                        <span class="location-details">0-800-12-345-6 880</span>
                    </p>
                    <p>
                        <span class="icon icon-location"></span>
                        <span class="location-details">Av. Salazar 345 Nr. 589</span>
                    </p>
                    <p>
                        <span class="icon icon-email"></span>
                        <span class="location-details">joyeria's@gmail.com</span>
                    </p>
                </div>
                <!-- Location: End -->
            </div>
        </section>
        <!-- Contact Section: End -->
    </main>
    </body>