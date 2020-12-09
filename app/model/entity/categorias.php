<?php

class categorias{
    private $name = "llx_categorie";

    private $custom;

    private $arraySubCategorias;

    private $countSubCategorias = 0;
    
    private $rowid;
    private $fk_parent;
    private $label;
    private $description;
    private $type;
    
    public function __constructComplete($rowid, $fk_parent, $label, $description,$type) {
        $this->rowid = $rowid;
        $this->fk_parent = $fk_parent;
        $this->label = $label;
        $this->description = $description;
        $this->type = $type;
    }

    public function __construct() {
        
    }

    
    
    public function getName() {
        return $this->name;
    }

    public function getCustom() {
        return $this->custom;
    }

    public function getArraySubCategorias() {
        return $this->arraySubCategorias;
    }

    public function getCountSubCategorias() {
        return $this->countSubCategorias;
    }

    public function getRowid() {
        return $this->rowid;
    }

    public function getFk_parent() {
        return $this->fk_parent;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getDescription() {
        return $this->description;
    }

    public function gettype() {
        return $this->type;
    }

    public function settype($type) {
        $this->type = $type;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setCustom($custom) {
        $this->custom = $custom;
        return $this;
    }

    public function setArraySubCategorias($arraySubCategorias) {
        $this->arraySubCategorias = $arraySubCategorias;
        return $this;
    }

    public function setCountSubCategorias($countSubCategorias) {
        $this->countSubCategorias = $countSubCategorias;
        return $this;
    }

    

    public function setRowid($rowid) {
        $this->rowid = $rowid;
        return $this;
    }

    public function setFk_parent($fk_parent) {
        $this->fk_parent = $fk_parent;
        return $this;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }


    
    
    
    
    
    
    
}