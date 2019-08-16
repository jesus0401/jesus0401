<?php require_once "dependencias.php"  ;

$pagina=  isset($_GET['p']) ? strtolower($_GET['p']):'inicio';


//llamamos al header, le damos una condicional para que seleccione que header usara 

if ($pagina=='faq'|| $pagina=='account'||$pagina=='404'||$pagina=='blog-details'||$pagina=='cart'||$pagina=='checkout'||$pagina=='category-list'||$pagina=='wishlist')
{
    require_once 'paginas/header2.php';
}
else
{
    require_once 'paginas/header.php';
}


 /*hacemos un parametro considerando que debe tener el mismo nombre del archivo a cargar*/

 require_once 'paginas/'.$pagina.'.php';

 
 /*hacemos una condicional a cada pagina para seleccionar un pie de pagina */
 if ($pagina=='cart'|| $pagina=='account'||$pagina=='404'||$pagina=='faq'||$pagina=='blog-details'||$pagina=='checkout'||$pagina=='category-list'||$pagina=='wish list')
 {
     require_once 'paginas/footer2.php';
 }
else
{
 require_once 'paginas/footer.php';
}
 ?>