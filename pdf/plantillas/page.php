
<?php 
require_once("../modelos/crud_basicos.php");
function getPlantilla($result){

$plantilla = '<body>
  <header class="clearfix">
    <div id="logo">
      <img src="img/logos.jpg">
    </div>
    <div id="project">';
    
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
          <th class="service">ESF</th>
          <th class="service">CIL</th>
          <th class="service">EJE</th>
          <th class="service">ADD</th>
          <th class="service">Tipo de lente</th> 
        </tr>
      </thead>
      <tbody>';

      for ($i=0; $i <count($result) ; $i++) { 
      
       $plantilla .='<tr>
          <td class="service">'.$result[$i]["esf1"].'</td>
          <td class="service">'.$result[$i]["cil1"].'</td>
          <td class="service">'.$result[$i]["eje1"].'</td>
          <td class="service">'.$result[$i]["add1"].'</td>
          <td class="service">'.$result[$i]["tipo_lente1"].'</td>
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
          <th class="service">ESF</th>
          <th class="service">CIL</th>
          <th class="service">EJE</th>
          <th class="service">ADD</th>
          <th class="service">Tipo de lente</th>
        </tr>
      </thead>
      <tbody>';
      
  
      for ($i=0; $i <count($result) ; $i++) { 
      
       $plantilla .='<tr>
          <td class="service">'.$result[$i]["esf2"].'</td>
          <td class="service">'.$result[$i]["cil2"].'</td>
          <td class="service">'.$result[$i]["eje2"].'</td>
          <td class="service">'.$result[$i]["add2"].'</td>
          <td class="service">'.$result[$i]["tipo_lente2"].'</td>
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
          <th class="service">Horizontal</th>
          <th class="service">Diagonal</th>
        </tr>
      </thead>
      <tbody>';
        
      for ($i=0; $i <count($result) ; $i++) { 
    
       $plantilla .='<tr>
          <td class="service">'.$result[$i]["filtro"].'</td>
          <td class="service">'.$result[$i]["montadura"].'</td>
          <td class="service">'.$result[$i]["tipo_talla"].'</td>
          <td class="service">'.$result[$i]["horizontal"].'</td>
          <td class="service">'.$result[$i]["diagonal"].'</td>
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
          
          <th class="service">DNP</th>
          <th class="service">DV</th>
          <th class="service">Filtro</th>
          <th class="service">Vertical</th>
          <th class="service">Puente</th>
          <th class="service">Altura focal</th>

        </tr>
      </thead>
      <tbody>';
      
      for ($i=0; $i <count($result) ; $i++) { 
    
       $plantilla .='<tr>
          <td class="service">'.$result[$i]["dnp"].'</td>
          <td class="service">'.$result[$i]["dv"].'</td>
          <td class="service">'.$result[$i]["filtro2"].'</td>
          <td class="service">'.$result[$i]["vertical"].'</td>
          <td class="service">'.$result[$i]["puente"].'</td>
          <td class="service">'.$result[$i]["altrura_focal"].'</td>
          
           
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
          <th class="service">DT</th>
          <th class="service">Color</th>
          <th class="service">D.T.Trabajo</th>
          <th class="service">Pant</th>
          <th class="service">Observaciones</th>
          <th class="service">Otras observaciones</th>
        </tr>
      </thead>
      <tbody>';
      for ($i=0; $i <count($result) ; $i++) { 
    
       $plantilla .='<tr>
          <td class="service">'.$result[$i]["dt"].'</td>
          <td class="service">'.$result[$i]["color"].'</td>
          <td class="service">'.$result[$i]["dtrabajo"].'</td>
          <td class="service">'.$result[$i]["pant"].'</td>
          <td class="service">'.$result[$i]["observaciones"].'</td>
          <td class="service">'.$result[$i]["otras_observaciones"].'</td>
        </tr>';
        }
      $plantilla .='</tbody>
    </table>
  </main>
</body>';
  
return $plantilla;
}


?>

