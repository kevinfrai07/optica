
<?php 
require_once("../modelos/crud_basicos.php");

function getPlantilla($result, $result2, $result3){

$plantilla = '<body>
  <header class="clearfix">
    <div id="logo">
      <img src="img/logos.jpg">
    </div>
    <div id="project">';
    $res=new datosBasicos();
          $result=$res->mostrar_datos_basicos();
      for($i=0; $i <count($result) ; $i++) {
       $plantilla .='<div id="company"><span>Fecha : </span>'.$result[$i]["fecha"].'</div>
      <div id="company"><span>Hora : </span>'.$result[$i]["hora"].'</div>
      <div id="company"><span>Diligenciador : </span>'.$result[$i]["diligenciador"].'</div>
      <div id="company"><span>Comprador : </span>'.$result[$i]["comprador"].'</div>
      <div id="company"><span>Empresa : </span>'.$result[$i]["empresa"].'</div>
      <div id="company"><span>Ciudad : </span>'.$result[$i]["ciudad"].'</div>
      <div id="company"><span>Direccion :</span>'.$result[$i]["direccion"].'</div>
      <div id="company"><span>Correo : </span><a href="mailto:john@example.com">'.$result[$i]["correo"].'</a></div>
      <div id="company"><span>Telefono : </span>'.$result[$i]["telefono"].'</div>';
      }
   $plantilla .='</div>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th class="service">ESF1</th>
          <th class="service">CIL1</th>
          <th class="service">EJE1</th>
          <th class="service">ADD1</th>
          <th class="service">Tipo de lente1</th> 
        </tr>
      </thead>
      <tbody>';
      $res2=new datosBasicos();
        $result2=$res2->mostrar_datos_especificos();  
      for ($i=0; $i <count($result2 ) ; $i++) { 
      
       $plantilla .='<tr>
          <td class="service">'.$result2[$i]["esf1"].'</td>
          <td class="service">'.$result2[$i]["cil1"].'</td>
          <td class="service">'.$result2[$i]["eje1"].'</td>
          <td class="service">'.$result2[$i]["add1"].'</td>
          <td class="service">'.$result2[$i]["tipo_lente1"].'</td>
        </tr>';
        }
      $plantilla .='</tbody>
    </table>
    <br>
    <br>
    <br>

    <table>
      <thead>
        <tr>
          <th class="service">ESF2</th>
          <th class="service">CIL2</th>
          <th class="service">EJE2</th>
          <th class="service">ADD2</th>
          <th class="service">Tipo de lente2</th>
        </tr>
      </thead>
      <tbody>';
      
      $res2=new datosBasicos();
        $result2=$res2->mostrar_datos_especificos();  
      for ($i=0; $i <count($result2 ) ; $i++) { 
      
       $plantilla .='<tr>
          <td class="service">'.$result2[$i]["esf1"].'</td>
          <td class="service">'.$result2[$i]["cil1"].'</td>
          <td class="service">'.$result2[$i]["eje1"].'</td>
          <td class="service">'.$result2[$i]["add1"].'</td>
          <td class="service">'.$result2[$i]["tipo_lente1"].'</td>
        </tr>';
        }
      $plantilla .='</tbody>
    </table>
    <br>
    <br>
    <br>
    <table>
      <thead>
        <tr>
          <th class="service">Filtro</th>
          <th class="service">Montadura</th>
          <th class="service">Tipo de talla</th>
        </tr>
      </thead>
      <tbody>';
      
      $res2=new datosBasicos();
        $result2=$res2->mostrar_datos_especificos();  
      for ($i=0; $i <count($result2 ) ; $i++) { 
    
       $plantilla .='<tr>
          <td class="service">'.$result2[$i]["filtro"].'</td>
          <td class="service">'.$result2[$i]["montadura"].'</td>
          <td class="service">'.$result2[$i]["tipo_talla"].'</td>
        </tr>';
        }
      $plantilla .='</tbody>
    </table>
    <br>
    <br>
    <br>
     <table>
      <thead>
        <tr>
          <th class="service">Fecha</th>
          <th class="service">Diagonal</th>
          <th class="service">DNP</th>
          <th class="service">DV</th>
          <th class="service">Filtro</th>
          <th class="service">Vertical</th>

        </tr>
      </thead>
      <tbody>';
      
      $res3=new datosBasicos();
        $result3=$res3->mostrar_observaciones();  
      for ($i=0; $i <count($result3 ) ; $i++) { 
    
       $plantilla .='<tr>
          <td class="service">'.$result3[$i]["fecha"].'</td>
          <td class="service">'.$result3[$i]["diagonal"].'</td>
          <td class="service">'.$result3[$i]["dnp"].'</td>
           <td class="service">'.$result3[$i]["dv"].'</td>
           <td class="service">'.$result3[$i]["filtro"].'</td>
           <td class="service">'.$result3[$i]["vertical"].'</td>
        </tr>';
        }
      $plantilla .='</tbody>
    </table>
    <br>
    <br>
    <br>
    <table>
      <thead>
        <tr>
          <th>Puente</th>
          <th>Altura focal</th>
          <th>DT</th>
          <th>Color</th>
          <th>D.T.Trabajo</th>
          <th>Pant</th>
          <th>Observaciones</th>
          <th>Otras observaciones</th>
        </tr>
      </thead>
      <tbody>';
      
      $res3=new datosBasicos();
        $result3=$res3->mostrar_observaciones();  
      for ($i=0; $i <count($result3 ) ; $i++) { 
    
       $plantilla .='<tr>
          <td >'.$result3[$i]["puente"].'</td>
          <td >'.$result3[$i]["altrura_focal"].'</td>
          <td >'.$result3[$i]["dt"].'</td>
          <td >'.$result3[$i]["color"].'</td>
          <td >'.$result3[$i]["dtrabajo"].'</td>
          <td >'.$result3[$i]["pant"].'</td>
          <td >'.$result3[$i]["observaciones"].'</td>
          <td >'.$result3[$i]["otras_observaciones"].'</td>
        </tr>';
        }
      $plantilla .='</tbody>
    </table>
  </main>
</body>';
  
return $plantilla;
}


?>

