<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of facturasDet
 *
 * @author Priceleggan
 */
class facturasDet {
    
    private $rowid;
    private $fk_facture;
    private $fk_product;
    private $description;
    private $tva_tx;
    private $qty;
    private $subprice;
    private $total_ht;
    private $total_tva;
    private $total_ttc;
    private $rang;
    private $multicurrency_subprice;
    private $multicurrency_total_ht;
    private $multicurrency_total_tva;
    private $multicurrency_total_ttc;
    
    
    public function __construct($rowid, $fk_facture, $fk_product, $description, $tva_tx, $qty, $subprice, $total_ht, $total_tva, $total_ttc, $rang, $multicurrency_subprice, $multicurrency_total_ht, $multicurrency_total_tva, $multicurrency_total_ttc) {
        $this->rowid = $rowid;
        $this->fk_facture = $fk_facture;
        $this->fk_product = $fk_product;
        $this->description = $description;
        $this->tva_tx = $tva_tx;
        $this->qty = $qty;
        $this->subprice = $subprice;
        $this->total_ht = $total_ht;
        $this->total_tva = $total_tva;
        $this->total_ttc = $total_ttc;
        $this->rang = $rang;
        $this->multicurrency_subprice = $multicurrency_subprice;
        $this->multicurrency_total_ht = $multicurrency_total_ht;
        $this->multicurrency_total_tva = $multicurrency_total_tva;
        $this->multicurrency_total_ttc = $multicurrency_total_ttc;
    }

    public function getRowid() {
        return $this->rowid;
    }

    public function getFk_facture() {
        return $this->fk_facture;
    }

    public function getFk_product() {
        return $this->fk_product;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getTva_tx() {
        return $this->tva_tx;
    }

    public function getQty() {
        return $this->qty;
    }

    public function getSubprice() {
        return $this->subprice;
    }

    public function getTotal_ht() {
        return $this->total_ht;
    }

    public function getTotal_tva() {
        return $this->total_tva;
    }

    public function getTotal_ttc() {
        return $this->total_ttc;
    }

    public function getRang() {
        return $this->rang;
    }

    public function getMulticurrency_subprice() {
        return $this->multicurrency_subprice;
    }

    public function getMulticurrency_total_ht() {
        return $this->multicurrency_total_ht;
    }

    public function getMulticurrency_total_tva() {
        return $this->multicurrency_total_tva;
    }

    public function getMulticurrency_total_ttc() {
        return $this->multicurrency_total_ttc;
    }

    public function setRowid($rowid) {
        $this->rowid = $rowid;
        return $this;
    }

    public function setFk_facture($fk_facture) {
        $this->fk_facture = $fk_facture;
        return $this;
    }

    public function setFk_product($fk_product) {
        $this->fk_product = $fk_product;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setTva_tx($tva_tx) {
        $this->tva_tx = $tva_tx;
        return $this;
    }

    public function setQty($qty) {
        $this->qty = $qty;
        return $this;
    }

    public function setSubprice($subprice) {
        $this->subprice = $subprice;
        return $this;
    }

    public function setTotal_ht($total_ht) {
        $this->total_ht = $total_ht;
        return $this;
    }

    public function setTotal_tva($total_tva) {
        $this->total_tva = $total_tva;
        return $this;
    }

    public function setTotal_ttc($total_ttc) {
        $this->total_ttc = $total_ttc;
        return $this;
    }

    public function setRang($rang) {
        $this->rang = $rang;
        return $this;
    }

    public function setMulticurrency_subprice($multicurrency_subprice) {
        $this->multicurrency_subprice = $multicurrency_subprice;
        return $this;
    }

    public function setMulticurrency_total_ht($multicurrency_total_ht) {
        $this->multicurrency_total_ht = $multicurrency_total_ht;
        return $this;
    }

    public function setMulticurrency_total_tva($multicurrency_total_tva) {
        $this->multicurrency_total_tva = $multicurrency_total_tva;
        return $this;
    }

    public function setMulticurrency_total_ttc($multicurrency_total_ttc) {
        $this->multicurrency_total_ttc = $multicurrency_total_ttc;
        return $this;
    }


    
}
