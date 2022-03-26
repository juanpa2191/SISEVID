<?php
	class Evidencia{
		var $id;
		var $nombre;
        var $tipoId;
		var $usuarioId;
        var $tipoEvidenciaId;
		function __construct($nombre,$tipoId,$usuarioId, $tipoEvidenciaId){
			$this->nombre=$nombre;
			$this->tipoId=$tipoId;
			$this->usuarioId=$usuarioId;
            $this->tipoEvidenciaId=$tipoEvidenciaId;
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
		function setTipoId($tipoId){
			$this->tipoId=$tipoId;
		}
		function getTipoId(){
			return $this->tipoId;
		}

        function setUsuarioId($usuarioId){
			$this->usuarioId=$usuarioId;
		}
		function getUsuarioId(){
			return $this->usuarioId;
		}

        function setTipoEvidenciaId($tipoEvidenciaId){
			$this->tipoEvidenciaId=$tipoEvidenciaId;
		}
		function getTipoEvidenciaId(){
			return $this->tipoEvidenciaId;
		}
        

	}
?>