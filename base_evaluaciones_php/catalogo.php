<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Catálogo - Unidad V</h2>
    <nav id="btn">
        <ul>
            <li ><a href="catalogo.php?id=sillon">Sillón Capri</a></li>
            <li ><a href="catalogo.php?id=mesa">Mesa Ipanema</a></li>
            <li ><a href="catalogo.php?id=banco">Banco Venecia</a></li>
        </ul>
    </nav>
    <?php
    if(isset($_GET['id'])){
    switch($_GET['id']){
        case'sillon':
            $titulo='Sillón Capri' ;
            $precio= '$345.00'; 
            $descripcion= 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece. ';
            $imagen='sillon1.jpg' ;
            break;
        case'mesa':
            $titulo='Mesa Ipanema' ;
            $precio= '$500.00'; 
            $descripcion= ' Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms ';
            $imagen='ipanema.jpg' ;
            break;
        case'banco':
            $titulo='Banco Venecia' ;
            $precio= '$450.00'; 
            $descripcion= 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.  ';
            $imagen='venecia.jpg' ;
            break;        
    }
    ?>
    <h2><?php echo $titulo; ?></h2>
    <h3>Precio:<?php echo $precio; ?></h3>
    <p><?php echo $descripcion; ?></p>
    <img src="imagenes/<?php echo $imagen; ?>" >
    <?php } else {}?>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>