<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of producto
 *
 * @author Priceleggan
 */
class producto {
    private $name = "llx_product";
    private $custom;
   
    private $rowid;
    private $ref;
    private $datec;
    private $label;
    private $description;
    private $price;
    private $price_ttc;
    private $price_min;
    private $price_min_ttc;
    private $price_base_type;
    private $tva_tx;
    private $stock;
    private $fk_default_warehouse;
    private $cost_price;
    
    public function __constructComplete($rowid, $ref, $datec, $label, $description, $price, $price_ttc, $price_min, $price_min_ttc, $price_base_type, $tva_tx, $stock, $fk_default_warehouse,$cost_price) {
        $this->rowid = $rowid;
        $this->ref = $ref;
        $this->datec = $datec;
        $this->label = $label;
        $this->description = $description;
        $this->price = $price;
        $this->price_ttc = $price_ttc;
        $this->price_min = $price_min;
        $this->price_min_ttc = $price_min_ttc;
        $this->price_base_type = $price_base_type;
        $this->tva_tx = $tva_tx;
        $this->stock = $stock;
        $this->fk_default_warehouse = $fk_default_warehouse;
        $this->cost_price = $cost_price;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getCustom() {
        return $this->custom;
    }

    public function getRowid() {
        return $this->rowid;
    }

    public function getRef() {
        return $this->ref;
    }

    public function getDatec() {
        return $this->datec;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getPrice_ttc() {
        return $this->price_ttc;
    }

    public function getPrice_min() {
        return $this->price_min;
    }

    public function getPrice_min_ttc() {
        return $this->price_min_ttc;
    }

    public function getPrice_base_type() {
        return $this->price_base_type;
    }

    public function getTva_tx() {
        return $this->tva_tx;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getFk_default_warehouse() {
        return $this->fk_default_warehouse;
    }
    
    public function getcost_price() {
        return $this->cost_price;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setCustom($custom) {
        $this->custom = $custom;
        return $this;
    }

    public function setRowid($rowid) {
        $this->rowid = $rowid;
        return $this;
    }

    public function setRef($ref) {
        $this->ref = $ref;
        return $this;
    }

    public function setDatec($datec) {
        $this->datec = $datec;
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

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function setPrice_ttc($price_ttc) {
        $this->price_ttc = $price_ttc;
        return $this;
    }

    public function setPrice_min($price_min) {
        $this->price_min = $price_min;
        return $this;
    }

    public function setPrice_min_ttc($price_min_ttc) {
        $this->price_min_ttc = $price_min_ttc;
        return $this;
    }

    public function setPrice_base_type($price_base_type) {
        $this->price_base_type = $price_base_type;
        return $this;
    }

    public function setTva_tx($tva_tx) {
        $this->tva_tx = $tva_tx;
        return $this;
    }

    public function setStock($stock) {
        $this->stock = $stock;
        return $this;
    }

    public function setFk_default_warehouse($fk_default_warehouse) {
        $this->fk_default_warehouse = $fk_default_warehouse;
        return $this;
    }

    public function setcost_price($cost_price) {
        $this->cost_price = $cost_price;
        return $this;
    }



}
