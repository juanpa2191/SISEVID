<?php
	class Literal{
		var $id;
		var $descripcion;
        var $codigo;
		var $articuloId;
		function __construct($descripcion,$codigo,$articuloId){
			$this->descripcion=$descripcion;
			$this->codigo=$codigo;
			$this->articuloId=$articuloId;
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

        function setArticuloId($articuloId){
			$this->articuloId=$articuloId;
		}
		function getArticuloId(){
			return $this->articuloId;
		}
       

	}
?>