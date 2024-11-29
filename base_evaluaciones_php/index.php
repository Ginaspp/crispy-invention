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
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <?php
       $fraseuno='Las siglas “PHP” significan “PHP: Hypertext Processor” algunos también lo traducen como “Pre-Hypertext
       Processor” (Procesador Previo al Hipertexto).';
       $frasedos='Sirve para hacer páginas de Internet dinámicas, con la posibilidad de combinarlo con bases de datos.';
       $frasetres='Los script de PHP suelen intercalarse en el código HTML de una página.';
       
       echo $fraseuno;
       echo"</br>";
       echo $frasedos;
       echo "<p>".$frasetres."</p>";
       ?>
        </div>
    <div id="uni4_2">
       <?php 
       echo"EVALUACIÓN";
       echo"</br>";
       echo"INTEGRADORA";
       echo"</br>";
       echo"PHP y MySQL";
       ?>
    </div>
    <div id="uni4_3">
        <?php
        $str ='Ésta es una variable del tipo cadena de carácteres.';
        $int = 25;
        $bool = true;
        echo $str."</br>";
        echo $int."</br>";
        echo $bool."</br>";
        ?>
    </div>
    <div id="uni4_4">
        <h3>Cálculo matemático echo desde php:</h3>
        <?php
        $unidades=36;
        $dura=4;
        $dias=60;
        $calculo='36*4/60';

        echo"<p>unidades totales: ".$unidades."</p>";
        echo"<p>Horas por unidad: ".$dura."</p>";
        echo"<p>Cantidad de días disponibles: ".$dias."</p>";
        echo"<p>cálculo: ".$calculo."</p>";
        echo"<p>Total de horas a estudiar por día: ".($unidades*$dura)/$dias."</p>";
        ?>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>