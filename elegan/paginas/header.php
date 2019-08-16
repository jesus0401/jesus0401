<!--<body class="home-page" style="margin-top: -30em;">-->
<header class="container-fluid clear">
        <div class="row">
            <!--Header Top: Begin-->
            <div id="header-top" class="clear">
                <!--Header Logo: Begin-->
                <div id="header-logo" class="col-sm-push-4 col-md-push-4 col-lg-push-5">
                    <a href="?p=inicio"><img src="assets/img/fanpage.png" alt="main logo" style="width: 95px; 
                     height:96px; margin-top: -25px; "></a>
                    <h1 class="hidden-heading">Jewelry</h1>
                </div>
                <!--Header Logo: End-->
                <!--Main Navigation: Begin-->
                <nav id="main-menu" class="col-sm-pull-4  col-md-pull-4 col-lg-pull-2">
                    <ul>
                        <li class="<?php echo $pagina=='Inicio'? 'active':''; ?>">
                            <span><a href="?p=inicio">Inicio</a></span>
                        </li>
                        <li class="<?php echo $pagina=='Catalogo'? 'active':''; ?>">
                            <span><a href="?p=category-grid" style="margin-left:-8px;">Catalogo</a></span>
                        </li>
                        
                        <li class="has-sub">
                            <span><a href="category-grid" style="margin-left: -8px"></a></span>
                            
                        </li>
                        <li class="<?php echo $pagina=='Nosotros'? 'active':''; ?>">
                                <span><a href="?p=blog-leftsidebar" style="margin-left: -1em;">Nosotros</a></span>
                        </li>
                        <li class="<?php echo $pagina=='Contacto'? 'active':''; ?>">
                            <span><a href="?p=contact">Contacto</a></span>
                        </li>
                    </ul>
                    <span class="mbmenu-icon">
                        <i class="icon-menu-1"></i>
                    </span>
                    <div id="mb-main-menu" class="main-menu">
                        <div class="mb-menu-title">
                            <h3>Navigation</h3>
                            <span id="close-mb-menu">
                                <i class="icon-cancel-circled"></i>
                            </span>
                        </div>
                        <ul class="sub-cate-list">
                            <li class="level0">
                                <a href="index.html">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="level0 parent">
                                <a href="#">
                                    <span>Rings</span>
                                    <i class="icon-down-open"></i><i class="icon-right-open"></i>
                                </a>
                                <ul class="level0">
                                    <li class="level1">
                                        <a href="product-details.html" title="Gold Rings">Gold Rings</a>
                                    </li>
                                    <li class="level1">
                                        <a href="product-details.html" title="White Gold Rings">Diamond Rings</a>
                                    </li>
                                    <li class="level1">
                                        <a href="product-details.html" title="Gemstone Rings">Silver Rings</a>
                                    </li>
                                    <li class="level1">
                                        <a href="product-details.html" title="Silver Rings">Gemstone Rings</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="level0 parent">
                                <a href="#">
                                    <span>Nosotros</span>
                                    <i class="icon-down-open"></i><i class="icon-right-open"></i>
                                </a>
                                <ul class="level0">
                                    <li class="level1">
                                        <a href="blog-category.html" title="Gold Rings">Blog Right Sidebar</a>
                                    </li>
                                    <li class="level1">
                                        <a href="blog-leftsidebar.html" title="White Gold Rings">Blog Left Sidebar</a>
                                    </li>
                                    <li class="level1">
                                        <a href="blog-details.html" title="Gemstone Rings">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 parent">
                                <a href="product-details.html" title="Gemstone Rings">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--Main Navigation: End-->
                <!--Search and Cart: Begin-->
                <!--Search and Cart: Begin-->
            </div>
            <!--Header Top: End-->
        </div>
    </header>
    </body>