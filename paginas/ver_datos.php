<?php 
require_once '../diseno/estilos_2.php';

?>
<link rel="stylesheet" href="..diseno/css/styles.css">
<link rel="stylesheet" href="../diseno/fontawesome/css/all.css">
<link rel="stylesheet" href="../diseno/datatables/datatables.min.css">
<link rel="stylesheet" href="../diseno/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../diseno/main.css">
<div class="container">
 <table class="table" id="example" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Fecha y Hora</th>
      <th scope="col">Diligenciador</th>
      <th scope="col">Comprador</th>
      <th scope="col">Empresa</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Dirección</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Factura</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    require_once '../modelos/crud_basicos.php';
    $res=new datosBasicos();
    $result=$res->mostrar_datos_basicos();
    for ($i=0; $i <count($result) ; $i++) { 


     ?>
     <tr>
      <td><?php echo $result[$i]['id_datos_basicos']?></td>
      <td><?php echo $result[$i]['fecha']?>   <?php echo $result[$i]['hora']; ?></td>
      <td><?php echo $result[$i]['diligenciador']; ?></td>
      <td><?php echo $result[$i]['comprador']; ?></td>
      <td><?php echo $result[$i]['empresa']; ?></td>
      <td><?php echo $result[$i]['ciudad'] ?></td>
      <td><?php echo $result[$i]['direccion'] ?></td>
      <td><?php echo $result[$i]['correo']; ?></td>
      <td><?php echo $result[$i]['telefono']; ?></td>
      <td><a href="../pdf?id=<?php echo $result[$i]['id_datos_basicos']?>" target="_blank"><i class="far fa-file-pdf" style="color: red;"></i></a></td>
    </tr>
  <?php } 
  ?>
</tbody>
</table>
</div>
<script src="../diseno/jquery/jquery-3.3.1.min.js"></script>
<script src="../diseno/popper/popper.min.js"></script>
<script type="text/javascript" src="../diseno/datatables/datatables.min.js"></script>     
<script type="text/javascript" src="../diseno/main.js"></script>  
