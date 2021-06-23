
<?php
  class ThronesDB {
	  
	  private $ip="127.0.0.1:33065";
	  private $us="root";
	  private $pw="";
	  private $db="gameofthrones";
	  
	  private $conexion=false;
	  private $mysqli;
	  private $consulta;
	  private $fila;
	  
	  function __construct(){
		   	  
		  $this->mysqli = new mysqli("$this->ip","$this->us","$this->pw","$this->db");
		  
		  if($this->mysqli->connect_errno){
			  echo ("Error en la conexión");
			 
		  }else {
			  $this->conexion=true;
			  echo ("Conexión realizada");
		  }
		  return $this->conexion;
		  
	  }
	  
	  public function info_actores(){
		  if ($this->conexion==true){
			  
			  //Se define la petición efectuándose la consulta
			  $this->consulta = $this->mysqli->query("select serie_name, name from cast");
		     			  
			  //Se extraen los datos registro a registro
			  while ($this->fila = $this->consulta->fetch_assoc()){
			      $tabla[]=$this->fila;
			  }
			  return $tabla;
			  
		  }else{
			  return null;
		   }
		  		  
	  }
	  
	  public function info_actores_peli(){
		  if ($this->conexion==true){
			  //Se define la petición efectuándose la consulta
			  $this->consulta = $this->mysqli->query("Select serie_name, season, name from season_ep");
			  
			  //Se extraen los datos registro a registro
			  while($this->fila = $this->consulta->fetch_assoc()){
				  $tabla[]=$this->fila;
			  }
			  
			  return $tabla;
		  }else{
			  return null;
		  }
		  
		  		  
	  }	  
	  
  }
  
  
  
  
  
  
  
  
  
  ?>