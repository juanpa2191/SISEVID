<?php
	class Usuario{
		var $id;
        var $nombre;
        var $activo;
        var $rolId;
		function __construct($nombre, $activo, $rolId){
			$this->nombre=$nombre;
            $this->activo=$activo;
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
        function setRolId($rolId){
			$this->rolId=$rolId;
		}
		function getRolId(){
			return $this->rolId;
		}

	}
?>