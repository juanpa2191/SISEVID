<?php
	class Asignatura{
		var $id;
		var $nombre;
        var $credito;
		var $programaId;
		function __construct($nombre,$credito,$programaId){
			$this->nombre=$nombre;
			$this->credito=$credito;
			$this->programaId=$programaId;
		}
		function setId($id){
			$this->id=$id;
		}
		function getId(){
			return $this->id;
		}
		function setNombre($nombre){
			$this->nombre=$nombre;
		}
		function getNombre(){
			return $this->nombre;
		}
		function setCredito($credito){
			$this->credito=$credito;
		}
		function getCredito(){
			return $this->credito;
		}
        

	}
?>