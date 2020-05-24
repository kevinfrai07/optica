//Código para Datables

//$('#example').DataTable(); //Para inicializar datatables de la manera más simple
$(document).ready( function () {
    $('#example').DataTable({
    	 "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
    });
} );
