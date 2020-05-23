
<?php 
require_once("../modelos/crud_basicos.php");


function getPlantilla($result, $result2, $result3){


 
$plantilla = '<body>
  <header class="clearfix">
    <div id="logo">
      <img src="img/logos.jpg">
    </div>
    <hr>
    <div id="project">';
    $res=new datosBasicos();
          $result=$res->mostrar_datos_basicos();
      for($i=0; $i <count($result) ; $i++) {
          $plantilla .='<div class="container"><span>Fecha : </span>'.$result[$i]["fecha"].'</div>
      <div><span>Hora : </span>'.$result[$i]["hora"].'</div>
      <div><span>Diligenciador : </span>'.$result[$i]["diligenciador"].'</div>
      <div><span>Comprador : </span>'.$result[$i]["comprador"].'</div>
      <div><span>Empresa : </span>'.$result[$i]["empresa"].'</div>
      <div><span>Ciudad : </span>'.$result[$i]["ciudad"].'</div>
      <div><span>Direccion :</span>'.$result[$i]["direccion"].'</div>
      <div><span>Correo : </span><a href="mailto:john@example.com">'.$result[$i]["correo"].'</a></div>
      <div><span>Telefono : </span>'.$result[$i]["telefono"].'</div>';
      }
   $plantilla .='</div>
      
    
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th>ESF1</th>
          <th>CIL1</th>
          <th>EJE1</th>
          <th>ADD1</th>
          <th>Tipo de lente1</th> 
        </tr>
      </thead>
      <tbody>';
      $res2=new datosBasicos();
        $result2=$res2->mostrar_datos_especificos();  
      for ($i=0; $i <count($result2 ) ; $i++) { 
      
       $plantilla .='<tr>
          <td>'.$result2[$i]["esf1"].'</td>
          <td class="">'.$result2[$i]["cil1"].'</td>
          <td class="">'.$result2[$i]["eje1"].'</td>
          <td class="">'.$result2[$i]["add1"].'</td>
          <td class="">'.$result2[$i]["tipo_lente1"].'</td>
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
          <th>ESF2</th>
          <th>CIL2</th>
          <th>EJE2</th>
          <th>ADD2</th>
          <th>Tipo de lente2</th>
            
          


        </tr>
      </thead>
      <tbody>';
      
      $res2=new datosBasicos();
        $result2=$res2->mostrar_datos_especificos();  
      for ($i=0; $i <count($result2 ) ; $i++) { 
        
      
        
      
       $plantilla .='<tr>
          <td>'.$result2[$i]["esf1"].'</td>
          <td class="">'.$result2[$i]["cil1"].'</td>
          <td class="">'.$result2[$i]["eje1"].'</td>
          <td class="">'.$result2[$i]["add1"].'</td>
          <td class="">'.$result2[$i]["tipo_lente1"].'</td>
          
          

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
          <th>Filtro</th>
          <th>Montadura</th>
          <th>Tipo de talla</th>
        </tr>
      </thead>
      <tbody>';
      
      $res2=new datosBasicos();
        $result2=$res2->mostrar_datos_especificos();  
      for ($i=0; $i <count($result2 ) ; $i++) { 
        
      
        
      
       $plantilla .='<tr>
          <td >'.$result2[$i]["filtro"].'</td>
          <td >'.$result2[$i]["montadura"].'</td>
          <td >'.$result2[$i]["tipo_talla"].'</td>
          
          

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
          <th>Fecha</th>
          <th>Diagonal</th>
          <th>DNP</th>
          <th>DV</th>
          <th>Filtro</th>
          <th>Vertical</th>

        </tr>
      </thead>
      <tbody>';
      
      $res3=new datosBasicos();
        $result3=$res3->mostrar_observaciones();  
      for ($i=0; $i <count($result3 ) ; $i++) { 
        
      
        
      
       $plantilla .='<tr>
          <td >'.$result3[$i]["fecha"].'</td>
          <td >'.$result3[$i]["diagonal"].'</td>
          <td >'.$result3[$i]["dnp"].'</td>
           <td >'.$result3[$i]["dv"].'</td>
           <td >'.$result3[$i]["filtro"].'</td>
           <td >'.$result3[$i]["vertical"].'</td>
          
          

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
  <footer>
    
  </footer>
</body>';
  
return $plantilla;
}


?>

