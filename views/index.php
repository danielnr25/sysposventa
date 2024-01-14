<?php
require_once('../models/Menu.php');

$menu = new Menu();
$listaOpciones = $menu->listarOpcionesMenu($_SESSION['idperfil']);
$listaOpciones = $listaOpciones->fetchAll(PDO::FETCH_NAMED);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="../theme/assets/images/favicon_1.ico">

        <title>VuderaSoft | Dashboard</title>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <script src="../theme/assets/js/jquery.min.js"></script>
        <link href="../theme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../theme/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="../theme/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../theme/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="../theme/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="../theme/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="../theme/assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="../theme/assets/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left">
        <div id="wrapper">

            <?php 
              include('includes/navbar.php');
              include('includes/sidebar.php');
            ?>

       
            <div class="content-page">
               
              
              
              <?php 
                include('includes/footer.php');
              ?>
                              
            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>
        
        <script src="../js/general.js?>rev<?php echo time(); ?>"></script>
        <!-- <script type="text/javascript" src="../utils/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../utils/dataTables.bootstrap5.min.js"></script>
        <script src="../utils/toastr.min.js"></script>
        <script src="../utils/sweetalert.js"></script>
        <script src="../utils/dropzone.js"></script> -->
        <!-- <script src="../utils/fileinput/js/fileinput.js"></script>
        <script src="../utils/fileinput/js/fileinput_locale_es.js"></script> -->
        <!-- <script type="text/javascript" src="../utils/select2/js/select2.full.min.js"></script> -->
        
        <script src="../theme/assets/js/bootstrap.min.js"></script>
        <script src="../theme/assets/js/detect.js"></script>
        <script src="../theme/assets/js/fastclick.js"></script>
        <script src="../theme/assets/js/jquery.slimscroll.js"></script>
        <script src="../theme/assets/js/jquery.blockUI.js"></script>
        <script src="../theme/assets/js/waves.js"></script>
        <script src="../theme/assets/js/wow.min.js"></script>
        <script src="../theme/assets/js/jquery.nicescroll.js"></script>
        <script src="../theme/assets/js/jquery.scrollTo.min.js"></script>
        <script src="../theme/assets/js/jquery.core.js"></script>
        <script src="../theme/assets/js/jquery.app.js"></script>

        
      
    </body>
</html>