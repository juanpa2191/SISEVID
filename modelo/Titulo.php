<?php
	class Titulo{
		var $id;
        var $descripcion;
        var $codigo;
        var $asignaturaId;
		function __construct($descripcion, $codigo, $asignaturaId){
			$this->descripcion=$descripcion;
            $this->codigo=$codigo;
            $this->asignaturaId=$asignaturaId;
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
        function setCodigo($codigo){
			$this->codigo=$codigo;
		}
		function getCodigo(){
			return $this->codigo;
		}
        function setAsignaturaId($asignaturaId){
			$this->asignaturaId=$asignaturaId;
		}
		function getAsignaturaId(){
			return $this->asignaturaId;
		}

	}
?>