<?php
	class Programa{
		var $id;
		var $descripcion;
        var $nombre;
        var $facultadId;
		function __construct($descripcion, $nombre, $facultadId){
			$this->descripcion=$descripcion;
			$this->nombre=$nombre;
            $this->facultadId=$facultadId;
		}
		function setId($id){
			$this->id=$id;
		}
		function getId(){
			return $this->id;
		}
		function setDescripcion($descripcion){
			$this->descripcion=$descripcion;
		}
		function getDescripcion(){
			return $this->descripcion;
		}
		function setNombre($nombre){
			$this->nombre=$nombre;
		}
		function getNombre(){
			return $this->nombre;
		}
        function setFacultadId($facultadId){
			$this->facultadId=$facultadId;
		}
		function getFacultadId(){
			return $this->facultadId;
		}

	}
?>