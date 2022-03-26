<?php
	class Numeral{
		var $id;
		var $descripcion;
        var $codigo;
        var $literalId;
		function __construct($descripcion, $codigo, $literalId){
			$this->descripcion=$descripcion;
			$this->codigo=$codigo;
            $this->literalId=$literalId;
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
        function setLiteralId($literalId){
			$this->literalId=$literalId;
		}
		function getLiteralId(){
			return $this->literalId;
		}

	}
?>