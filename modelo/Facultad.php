<?php
	class Facultad{
		var $id;
		var $nombre;
        var $activo;
		var $ubicacion;
		function __construct($nombre,$activo,$ubicacion){
			$this->nombre=$nombre;
			$this->activo=$activo;
			$this->ubicacion=$ubicacion;
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
		function setActivo($activo){
			$this->activo=$activo;
		}
		function getActivo(){
			return $this->activo;
		}

        function setUbicacion($ubicacion){
			$this->ubicacion=$ubicacion;
		}
		function getUbicacion(){
			return $this->ubicacion;
		}
       

	}
?>