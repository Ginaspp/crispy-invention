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
    <h2>Noticias - Unidad VI</h2>
    <?php
    $titulo= array('¿Todavía no te inscribiste al Taller de Robótica, Electrónica y Programación?','Radio Universidad celebra sus 30 años en el aire con programación renovada','Aprendé a programar en tu Punto Digital','Pasos para utilizar jQuery en tu página web');
    $texto= array('La Secretaría de Producción, Innovación y Empleo de la Municipalidad comunica que está abierta la preinscripción para el Taller de Robótica, Electrónica y Programación en el Centro de Formación Profesional Municipal.',
                'A partir del 1º de julio, Radio Universidad presentará una nueva grilla con cambios significativos en su programación vespertina, incluyendo nuevas incorporaciones y ampliaciones de horario.','El Programa Punto 
                Digital lanzó este año un curso virtual de programación dirigido a jóvenes a partir de los 15 años, que permitirá a los participantes crear aplicaciones y páginas web.','Tu primer script jQuery. Cómo instalar jQuery en la página web y los pasos 
                para realizar un primer ejemplo, con explicaciones básicas y detalladas sobre la los fundamentos de uso de la librería.');
    $imagen= array('noti1.jpg','noti2.jpg','noti3.jpg','noti4.jpg');
    
    for ($i=0; $i<4; $i++) {
    ?>
    <div class="noticias">
        <h3 class="titulos"><?php echo $titulo[$i];?></h3>
        <p><?php echo $texto[$i];?></p>
        <img src="imagenes/<?php echo $imagen[$i];?>" class="imagen" >
    </div>
   <?php } ?>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>