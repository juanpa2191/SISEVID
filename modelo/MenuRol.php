<?php
	class MenuRol{
		var $id;
		var $menuId;
        var $rolId;
        var $activo;
		function __construct($menuId, $activo, $rolId){
			$this->menuId=$menuId;
			$this->activo=$activo;
            $this->rolId=$rolId;
		}
		function setId($id){
			$this->id=$id;
		}
		function getId(){
			return $this->id;
		}
		function setMenuId($menuId){
			$this->menuId=$menuId;
		}
		function getMenuId(){
			return $this->menuId;
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