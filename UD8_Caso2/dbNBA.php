
<?php
  class dbNBA {
	  
	  private $ip="127.0.0.1:33065";
	  private $us="root";
	  private $pw="";
	  private $db="nba";
	  
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
			  //echo ("Conexión realizada");
		  }
		  return $this->conexion;
		  
	  }
	  
	  public function busca_equipo($nomb_equipo){
		  if ($this->conexion==true){
			  
			  //echo ($nomb_equipo);
			  
			  //Se define la petición efectuándose la consulta
			  $this->consulta = $this->mysqli->query("select * from equipos where nombre like '%".$nomb_equipo."%'");
			  
			          				
			  //Se extraen los datos registro a registro
			  while ($this->fila = $this->consulta->fetch_assoc()){
				  
			      $tabla[]=$this->fila;
			  }
			  
			  //dump_var($tabla);
			  
			  if (isset($tabla)){
			      return $tabla;
			  }
			  
		  }else{
			  return null;
		   }
		  		  
	  }
	  
 	  public function busca_encuentro($nomb_local,$nomb_visit,$temporada){
		  
		  if ($this->conexion==true){
			  
			  //echo ($nomb_equipo);
			  
			  //Se define la petición efectuándose la consulta
			  $this->consulta = $this->mysqli->query("select equipo_local, equipo_visitante, puntos_local, puntos_visitante, 
			                                          temporada from partidos where 
			                                          equipo_local like '%".$nomb_local."%' and 
													  equipo_visitante like '%".$nomb_visit."%' and
													  temporada like '%".$temporada."%'");
				          				
			  //Se extraen los datos registro a registro
			  while ($this->fila = $this->consulta->fetch_assoc()){
				  
			      $tabla[]=$this->fila;
			  }
			  
			  //dump_var($tabla);
			  
			  if (isset($tabla)){
			      return $tabla;
			  }
			  
		  }else{
			  return null;
		   }
		  		  
	  }
	  
  }
  
  
  
  
  
  
  
  
  
  ?>