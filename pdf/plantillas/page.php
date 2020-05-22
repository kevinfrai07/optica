<?php 
require_once("../modelos/crud_basicos.php");

function getPlantilla($result, $result2){


 
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
          $plantilla .='<div><span>Fecha</span>'.$result[$i]["fecha"].'</div>
      <div><span>Hora</span>'.$result[$i]["hora"].'</div>
      <div><span>Diligenciador</span>'.$result[$i]["diligenciador"].'</div>
      <div><span>Comprador</span>'.$result[$i]["comprador"].'</div>
      <div><span>Empresa</span>'.$result[$i]["empresa"].'</div>
      <div><span>Ciudad</span>'.$result[$i]["ciudad"].'</div>
      <div><span>Direccion</span>'.$result[$i]["direccion"].'</div>
      <div><span>Correo</span><a href="mailto:john@example.com">'.$result[$i]["correo"].'</a></div>
      <div><span>Telefono</span>'.$result[$i]["telefono"].'</div>';
      }
   $plantilla .='</div>
      
    
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th>ESF</th>
          <th>CIL</th>
          <th>EJE</th>
          <th>ADD</th>
          <th>Tipo de lente</th>
          <th>ESF</th>
          <th>CIL</th>
          <th>EJE</th>
          <th>ADD</th>
          <th>Tipo de lente</th>
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
          <p>'.$result2[$i]["esf1"].'</p>
          <td class="">'.$result2[$i]["cil1"].'</td>
          <td class="">'.$result2[$i]["eje1"].'</td>
          <td class="">'.$result2[$i]["add1"].'</td>
          <td class="">'.$result2[$i]["tipo_lente1"].'</td>
          <td class="">'.$result2[$i]["esf2"].'</td>
          <td class="">'.$result2[$i]["cil2"].'</td>
          <td class="">'.$result2[$i]["eje2"].'</td>
          <td class="">'.$result2[$i]["add2"].'</td>
          <td class="">'.$result2[$i]["tipo_lente2"].'</td>
          <td class="">'.$result2[$i]["filtro"].'</td>
          <td class="">'.$result2[$i]["montadura"].'</td>
          <td class="">'.$result2[$i]["tipo_talla"].'</td>

        </tr>';
        }
      $plantilla .='</tbody>
    </table>
    
  </main>
  <footer>
    Invoice was created on a computer and is valid without the signature and seal.
  </footer>
</body>';
  
return $plantilla;
}


?>

