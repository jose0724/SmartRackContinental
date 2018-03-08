<?php
/**
* 
*/
/*class BD extends mysqli
{
	private $Conexion;
	function __construct($host,$user,$pass,$dbname)
	{
		//$var=new mysqli($host,$user,$pass,$dbname);
		# code...
		$this->Conexion=parent::__construct($host,$user,$pass,$dbname);
		if (mysqli_connect_errno()) {
			    printf("Connect failed: %s\n", mysqli_connect_error());
			    exit();
		}
	}

	function query_stm($query){
			$query = $this->Conexion->query($query);
			return $query;
	}
		
}*/


class bd
{
		var $hosting = NULL;
		var $usuario = NULL;
		var $contrasena = NULL;
		var $nombrebd = NULL;
		var $conexion = NULL;
		
		
		/*function data($hosting,$usuario,$contrasena,$nombrebd){
			$this->hosting=$hosting;
			$this->usuario=$usuario;
			$this->contrasena=$contrasena;
			$this->nombrebd=$nombrebd;
		}*/
		function __construct($hosting,$usuario,$contrasena,$nombrebd){
			$this->hosting=$hosting;
			$this->usuario=$usuario;
			$this->contrasena=$contrasena;
			$this->nombrebd=$nombrebd;
		}
		
		function conectar(){
			$this->conexion = mysqli_connect( $this->hosting,$this->usuario,$this->contrasena,$this->nombrebd );
			if( !$this->conexion ){
				$this->error("Imposible conectar con la base de datos.");
			}
			$this->seleccionar_db();
			mysqli_set_charset($this->conexion,'utf8');
		}
		
		function seleccionar_db(){
			$select = mysqli_select_db( $this->conexion,$this->nombrebd );
			if( !$select ){
				$this->error("Imposible seleccionar la base de datos.");
			} //$this->data("","","",$this->nombrebd);
		}
		
		function cuantos($resource){
			return mysqli_num_rows($resource);
		}
		
		function insert_id(){
			return mysqli_insert_id($this->conexion);
		}
		
		function squery($query){
			$query = mysqli_query($this->conexion,$query );
			return $query;
		}
		
		function siguiente( $query ){
			return mysqli_fetch_assoc( $query );
		}
		
		function close(){
			mysqli_close( $this->conexion );
		}
		
		function error( $msg ){
			/*echo "<pre>"
				 ."<h1>Error mysql:</h1>"
				 ."".$msg."\r\n";
			print_r( debug_backtrace() );
			echo "</pre>";*/
		}
		function valor( $query ){
			$valor=$this->siguiente($this->query($query));
			return $valor['valor'];
		}
		function prepareQuery($query , $params = null)
		{
			$result = array();

			if ($stmt = mysqli_prepare($this->conexion,$query)) {
				if (isset($params)){
					$tmpArray = array();
					foreach ($params as $i => $value) {
						$tmpArray[$i] = &$params[$i];
					}
					call_user_func_array(array($stmt, 'bind_param'), $tmpArray);
				}

				$stmt->execute();
			    if ($stmt->field_count > 0) {
					$row = $this->bind_result_array($stmt);
					while ($stmt->fetch())	$result[] = $this->getCopy($row);
				}
				$stmt->close();
		    }
			return $result;
		}
		private function bind_result_array( $stmt ) {
		    $meta = $stmt->result_metadata();
		    $result = array();
		    while ($field = $meta->fetch_field()) {
		        $result[$field->name] = NULL;
		        $params[] = &$result[$field->name];
		    }
	    	call_user_func_array(array($stmt, 'bind_result'), $params);
		    return $result;
		}
		private function getCopy( $row ) {
		    return array_map(create_function('$a', 'return $a;'), $row);
		}
	}
?>