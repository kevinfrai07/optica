<?php 
	require_once("config.php");
	/**
	 * 
	 */
	class conexion
	{
		protected $conexion;
		function conexion()
		{
			$this->conexion= new mysqli(host, usu, pass, db);
		}
	}

 ?>