<?php
class bd_Base{
	var $cnx;
	var $h;
	var $u;
	var $p;
	var $b;
	var $t;
	function __construct(){
		include_once('config.php');
		$this->t=$cfg['t'];
		$this->h=$cfg['h'];
		$this->u=$cfg['u'];
		$this->p=$cfg['p'];
		$this->b=$cfg['b'];
	}
	#-------------
	function conectar(){
		switch($this->t){
			case 'mysql':
				$this->cnx=mysqli_connect($this->h,$this->u,$this->p,$this->b);
				mysqli_query($this->cnx,"set names utf8");
				break;
			case 'postgres':
				$this->cnx=pg_connect("host=$this->h dbname=$this->b user=$this->u password=$this->p");
				break;
		}
	}
	#-------------
	function consultar($sql=''){
		# select
		$this->conectar();
		switch($this->t){
			case 'mysql':
				$bolsa=mysqli_query($this->cnx,$sql);
				$datos=array();
				while($fila=mysqli_fetch_assoc($bolsa)){
					$datos[]=$fila;
				}			
				break;
			case 'postgres':
				$bolsa=pg_query($this->cnx,$sql);
				$datos=array();
				while($fila=pg_fetch_assoc($bolsa)){
					$datos[]=$fila;
				}
				break;
		}
		return $datos;
	}
	#-------------
	function ejecutar($sql=''){
		# insert, update, delete
		$this->conectar();
		switch($this->t){
			case 'mysql':
				$exito=mysqli_query($this->cnx,$sql);
				break;
			case 'postgres':
				$exito=pg_query($this->cnx,$sql);
				break;
		}
		return $exito;
	}
	#-------------
}
?>