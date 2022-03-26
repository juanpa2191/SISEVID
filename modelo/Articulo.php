<?php
	class Articulo{
		var $id;
		var $descripcion;
        var $codigo;
		var $capituloId;
		function __construct($codigo,$descripcion,$capituloId){
			$this->codigo=$codigo;
			$this->descripcion=$descripcion;
			$this->telefono=$capituloId;
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