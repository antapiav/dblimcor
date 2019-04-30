<?php
    include './conexion/conexion.php';
    $sql="select * from cliente";
    $resultado=mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="./css/materialize.min.css">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css">-->
</head>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($filas=mysql_fetch_assoc($resultado)){
    ?>
        <tr>
            <th><?php echo $filas['id_cliente']?></th>
            <th><?php echo $filas['nombre']?></th>
        </tr>
    <?php            
        }
    ?>
    </tbody>
</table>
<body>
    <!--NAV-->
    <nav class="blue darken-1">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="mobile.html">Cerrar</a></li>
        </ul>
        </div>
    </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    <!--FIN-NAV-->
    <!--FORMULARIO_REGISTRAR-->
    <div class="container">
    <div class="section">
    <div class="card hoverable">
        <div class="card-content">
            <p>TITULO</p>
        </div>
        <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
                <li class="tab"><a href="#test4">Test 1</a></li>
                <li class="tab"><a class="active" href="#test5">Test 2</a></li>
                <li class="tab"><a href="#test6">Test 3</a></li>
            </ul>
        </div>
            <div class="card-content grey lighten-4">
            <div id="test4">aqui una descripcion</div>
        </div>
    </div>
</div>
</div>

<!--SCRIPTS-->
<script src="./js/jquery-2.2.4.js"></script>
    <script src="./js/materialize.min.js"></script>
    <!--<script src="main.js"></script>-->
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>
</body>
</html>