<?php require_once "dependencias.php"  ;?>
<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from netbaseteam.com/wordpress/html/elegan/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 00:29:44 GMT -->
<head>
    <meta charset="UTF-8">
    <title>CONTACTO</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
    <meta name="description" content="Jewelry HTML Template">
    <meta name="author" content="Netbase">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="contact-page">
    <!-- Main Page: Begin -->
    <main>
        <!-- Breadcrumb: Begin -->
        <div class="breadcrumb-wrap clear">
            <div class="container">
                <p class="breadcrumb">
                <br><br><br>
                    <span>Tu estas aqui:</span><span>Inicio /</span><span>Contacto</span>
                </p>
            </div>
        </div>
        <!-- Breadcrumb: End -->
        <div class="container">
            <h1>Contactos</h1>
        </div>
        <!-- Google Map: Begin -->
        <div class="google-map-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <br><br>
        <!-- Google Map: End -->
        <div class="container">
            <div class="row">
                <div class="contact-form-wrap">
                    <form action="enviar.php" method="post">
                        <div class="contact-left form-group msg_message">
                            <p>
                                <textarea name="msg_message" id="msg_message" cols="30" rows="12" placeholder="Mensaje *" class="form-control" required></textarea>
                            </p>
                            
                        </div>
                        <div class="contact-right">
                            <div class="form-group msg_name">
                                <input type="text" name="msg_name" id="msg_name" placeholder="Ingresa tus nombres *" class="form-control" required>
                            </div>
                            <div class="form-group msg_email">
                                <input type="text" name="msg_email" id="msg_email" placeholder="Ingresa tu Email *" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" placeholder="Ingrese el asunto" class="form-control" requires>
                            </div>
                            <p id="cb-send-copy">
                                <input type="checkbox" value="" name="send-copy" id="contact-form-create-acc" required>
                                <label for="contact-form-create-acc">Guardar copia</label>
                            </p>
                            <button type="submit" class="button-ss">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Page: End -->
    <!-- Footer: Begin -->
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/stacktable.min.js"></script>
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/jquery.themepunch.plugins.min.js"></script>
    <script src="assets/js/jquery.fancybox.pack8cbb.js?v=2.1.5" type="text/javascript"></script>
    <script src="assets/js/scripts.min.js"></script>
</body>


<!-- Mirrored from netbaseteam.com/wordpress/html/elegan/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 00:29:44 GMT -->
</html>