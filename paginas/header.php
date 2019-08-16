<?php require_once 'dependencias.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>INICIO</title>

   <!--<style>body{padding-top:30px;}</style>-->
</head>
<body class="home-page" style="margin-top:1em;">
    <!--Header: Begin-->
    <header class="container-fluid clear">
        <div class="row">
            <!--Header Top: Begin-->
            <div id="header-top" class="clear" style="margin-top: -1em">
                <!--Header Logo: Begin-->
                <div id="header-logo" class="col-sm-push-4 col-md-push-4 col-lg-push-5">
                    <a href="?p=inicio"><img src="assets/img/fanpage.png" alt="main logo" style="height:90px; margin-top: -1.5em;" ></a>
                    <h1 class="hidden-heading">Jewelry</h1>
                </div>
                <!--Header Logo: End-->
                <!--Main Navigation: Begin-->
                <nav id="main-menu" class="col-sm-pull-4  col-md-pull-4 col-lg-pull-2">
                    <ul>

                        <li class="<?php echo $pagina=='Inicio'? 'active':''; ?>">
                            <span><a href="?p=inicio" style="margin-left:-15px;">Inicio</a></span>
                        </li>

                        <li class="<?php echo $pagina=='Catalogo'? 'active':''; ?>">
                                <span><a href="?p=category-grid" style="margin-left:-8px;">Catalogo</a></span>
                        </li>
                        <li class="has-sub"> 
                                <span><a  style="margin-left:-10px">Quienes Somos</a></span>
                                <ul class="sub-menu single-column">
                                    <li>
                                        <h4>Bienvenidos</h4>
                                        <ul>
                                            <li class="<?php echo $pagina=='Mision y vision'? 'active':''; ?>"><a href="?p=blog-category">Mision y vision</a></li>
                                            <li class="<?php echo $pagina=='Nosotros'?'active':''?>"><a href="?p=blog-leftsidebar">Nosotros</a></li>
                                        </ul> 
                                    </li>
                                </ul>
                         </li> 
                        <li class = "<?php echo $pagina=='contacto'?'ative':'';?>"> 
                                <span><a href="?p=contact1">contacto</a></span>
                        </li>
                    </ul>
                <span class="mbmenu-icon">
                    <i class="icon-menu-1"></i>
                </span>
                <div id="mb-main-menu" class="main-menu">
                    <div class="mb-menu-title">
                        <h3>INICIO</h3>
                        <span id="close-mb-menu">
                            <i class="icon-cancel-circled"></i>
                        </span>
                    </div>
                    <ul class="sub-cate-list">
                        <li class="level0">
                            <a href="?p=inicio">
                                <span>Inicio</span>
                            </a>
                        </li> 
                        <li class="level0 parent">
                            <a href="?p=category-grid">
                                <span>Catalogo</span> 
                            </a>
                            
                        </li>
                        <li class="level0 parent">
                            <a> 
                                <span>Quienes Somos</span>
                                <i class="icon-down-open"></i><i class="icon-right-open"></i>
                                <ul>
                                    <li><a href="?p=blog-category">Mision y vision</a></li>
                                    <hr>
                                    <li><a href="?p=blog-leftsidebar">Nosotros</a></li>
                                    <hr>
                                </ul>
                            </a>
                            
                        </li>
                        <li>
                            <span><a href="?p=contact1">contacto</a></span>
                        </li>
                        
                </nav>
                <!--Main Navigation: End-->
                <!--Search and Cart: Begin-->
                <!--Search and Cart: Begin-->
            </div>
            <!--Header Top: End--> 
        </div>
    </header>
 