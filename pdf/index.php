<?php 

	//plantilla html
	require_once('vendor/autoload.php');
	//codigo css plantilla
	require_once('plantillas/page.php');
	//pedir los datos del crud para imprimirlos en el pdf
	require_once('../modelos/crud_basicos.php');
	

	

	
	$res=new datosBasicos();
        	$result=$res->mostrar_datos_basicos_id($_GET['id']);


        	
    

	$css = file_get_contents('plantillas/style.css');
	

	$mpdf = new \Mpdf\Mpdf([

	]);
	
	$plantilla = getPlantilla($result);
	$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
	$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
	
	$mpdf->Output('');
 ?>