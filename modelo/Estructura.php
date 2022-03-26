<?php
	class Estructura{
		var $id;
		var $descripcion;
        var $codigo;
		var $tituloId;
		function __construct($descripcion,$codigo,$tituloId){
			$this->descripcion=$descripcion;
			$this->codigo=$codigo;
			$this->tituloId=$tituloId;
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
        

	}
?>