<?php require_once "dependencias.php"  ;

$pagina=  isset($_GET['p']) ? strtolower($_GET['p']):'inicio';
//llamamos al header 
if ($pagina=='inicio')
{
    require_once 'paginas/header.php';
}
else if($pagina=='category-grid')
{
    require_once 'paginas/header3.php';
}
else if($pagina=='blog-category'||$pagina=='blog-leftsidebar'||$pagina=='blog-details'||$pagina=='faq'||$pagina=='product-details'||$pagina=='wishlist'||$pagina=='category-list'||$pagina=='checkout'||$pagina=='cart')
{
    require_once 'paginas/header4.php';
}
else{
 require_once 'paginas/header2.php';
}

 /*hacemos un parametro considerando que debe tener el mismo nombre del archivo a cargar*/

 require_once 'paginas/'.$pagina.'.php';


 require_once 'paginas/footer.php';

 ?>