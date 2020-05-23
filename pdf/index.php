<?php 

	//plantilla html
	require_once('vendor/autoload.php');
	//codigo css plantilla
	require_once('plantillas/page.php');
	//pedir los datos del crud para imprimirlos en el pdf
	require_once('../modelos/crud_basicos.php');
	

	

	
	

	$res=new datosBasicos();
        	$result=$res->mostrar_datos_basicos();

    $res2=new datosBasicos();
    		$result2=$res2->mostrar_datos_especificos();

    $res3=new datosBasicos();
    		$result3=$res3->mostrar_observaciones();
        	
    

	$css = file_get_contents('plantillas/style.css');
	

	$mpdf = new \Mpdf\Mpdf([

	]);
	
	$plantilla = getPlantilla($result,$result2,$result3);
	$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
	$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
	
	$mpdf->Output();
 ?>