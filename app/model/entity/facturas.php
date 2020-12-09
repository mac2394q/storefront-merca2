<?php

class facturas {
   
    private $name = "llx_facture";

    private $custom;

    private $arrayDetFacture;

    private $rowid;
    private $ref;
    private $ref_ext;
    private $ref_client;
    private $type;
    private $fk_soc;
    private $datec;
    private $datef;
    private $date_valid;
    private $paye;
    private $tva;
    private $total;
    private $total_ttc;
    private $fk_statut;
    private $module_source;
    private $fk_account;
    private $fk_cond_reglement;
    private $fk_mode_reglement;
    private $date_lim_reglement;
    private $note_private;
    private $note_public;
    private $multicurrency_total_ht;
    private $multicurrency_total_tva;
    private $multicurrency_total_ttc;
    
    public function __construct() {}

    public function __constructComplete($rowid, $ref, $ref_ext, $ref_client, $type, $fk_soc, $datec, $datef, $date_valid, $paye, $tva, $total, $total_ttc, $fk_statut, $module_source, $fk_account, $fk_cond_reglement, $fk_mode_reglement, $date_lim_reglement, $note_private, $note_public, $multicurrency_total_ht, $multicurrency_total_tva, $multicurrency_total_ttc) {
        $this->rowid = $rowid;
        $this->ref = $ref;
        $this->ref_ext = $ref_ext;
        $this->ref_client = $ref_client;
        $this->type = $type;
        $this->fk_soc = $fk_soc;
        $this->datec = $datec;
        $this->datef = $datef;
        $this->date_valid = $date_valid;
        $this->paye = $paye;
        $this->tva = $tva;
        $this->total = $total;
        $this->total_ttc = $total_ttc;
        $this->fk_statut = $fk_statut;
        $this->module_source = $module_source;
        $this->fk_account = $fk_account;
        $this->fk_cond_reglement = $fk_cond_reglement;
        $this->fk_mode_reglement = $fk_mode_reglement;
        $this->date_lim_reglement = $date_lim_reglement;
        $this->note_private = $note_private;
        $this->note_public = $note_public;
        $this->multicurrency_total_ht = $multicurrency_total_ht;
        $this->multicurrency_total_tva = $multicurrency_total_tva;
        $this->multicurrency_total_ttc = $multicurrency_total_ttc;
    }

    public function attributesTable(){
        
        return $arrayEntity = [
            array ("rowid" ,"Int","primary"),
            array ("ref" ,"String",null),
            array ("ref_ext" ,"String",null),
            array ("ref_client" ,"String",null),
            array ("type" ,"Int",null),
            array ("fk_soc" ,"Int",null),
            array ("datec" ,"String",null),
            array ("datef" ,"String",null),
            array ("date_valid" ,"String",null),
            array ("paye" ,"int",null),
            array ("tva" ,"Int",null),
            array ("total" ,"Int"),
            array ("total_ttc" ,"String",null),
            array ("fk_statut" ,"String",null),
            array ("module_source" ,"String",null),
            array ("fk_account" ,"int",null),
            array ("fk_cond_reglement" ,"Int",null),
            array ("fk_mode_reglement" ,"int",null),
            array ("date_lim_reglement" ,"String",null),
            array ("note_private" ,"String",null),
            array ("note_public" ,"String",null),
            array ("multicurrency_total_ht" ,"Int",null),
            array ("multicurrency_total_tva" ,"Int",null),
            array ("multicurrency_total_ttc" ,"Int",null)
        ];
    }
    

    public function getTableName(){
        return $this->name;
    }

    public function getRowid() {
        return $this->rowid;
    }

    public function getRef() {
        return $this->ref;
    }

    public function getRef_ext() {
        return $this->ref_ext;
    }

    public function getRef_client() {
        return $this->ref_client;
    }

    public function getType() {
        return $this->type;
    }

    public function getFk_soc() {
        return $this->fk_soc;
    }

    public function getDatec() {
        return $this->datec;
    }

    public function getDatef() {
        return $this->datef;
    }

    public function getDate_valid() {
        return $this->date_valid;
    }

    public function getPaye() {
        return $this->paye;
    }

    public function getTva() {
        return $this->tva;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getTotal_ttc() {
        return $this->total_ttc;
    }

    public function getfk_statut() {
        return $this->fk_statut;
    }

    public function getModule_source() {
        return $this->module_source;
    }

    public function getFk_account() {
        return $this->fk_account;
    }

    public function getFk_cond_reglement() {
        return $this->fk_cond_reglement;
    }

    public function getFk_mode_reglement() {
        return $this->fk_mode_reglement;
    }

    public function getDate_lim_reglement() {
        return $this->date_lim_reglement;
    }

    public function getNote_private() {
        return $this->note_private;
    }

    public function getNote_public() {
        return $this->note_public;
    }

    public function getMulticurrency_total_ht() {
        return $this->multicurrency_total_ht;
    }

    public function getMulticurrency_total_tva()  {
        return $this->multicurrency_total_tva;
    }

    public function getMulticurrency_total_ttc() {
        return $this->multicurrency_total_ttc;
    }

    public function getCustom() {
        return $this->custom;
    }

    public function getarrayDetFacture() {
        return $this->arrayDetFacture;
    }
    

    public function setRowid($rowid) {
        $this->rowid = $rowid;
        return $this;
    }

    public function setRef($ref) {
        $this->ref = $ref;
        return $this;
    }

    public function setRef_ext($ref_ext) {
        $this->ref_ext = $ref_ext;
        return $this;
    }

    public function setRef_client($ref_client) {
        $this->ref_client = $ref_client;
        return $this;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setFk_soc($fk_soc) {
        $this->fk_soc = $fk_soc;
        return $this;
    }

    public function setDatec($datec) {
        $this->datec = $datec;
        return $this;
    }

    public function setDatef($datef) {
        $this->datef = $datef;
        return $this;
    }

    public function setDate_valid($date_valid) {
        $this->date_valid = $date_valid;
        return $this;
    }

    public function setPaye($paye) {
        $this->paye = $paye;
        return $this;
    }

    public function setTva($tva) {
        $this->tva = $tva;
        return $this;
    }

    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    public function setTotal_ttc($total_ttc) {
        $this->total_ttc = $total_ttc;
        return $this;
    }

    public function setfk_statut($fk_statut) {
        $this->fk_statut = $fk_statut;
        return $this;
    }

    public function setModule_source($module_source) {
        $this->module_source = $module_source;
        return $this;
    }

    public function setFk_account($fk_account) {
        $this->fk_account = $fk_account;
        return $this;
    }

    public function setFk_cond_reglement($fk_cond_reglement) {
        $this->fk_cond_reglement = $fk_cond_reglement;
        return $this;
    }

    public function setFk_mode_reglement($fk_mode_reglement) {
        $this->fk_mode_reglement = $fk_mode_reglement;
        return $this;
    }

    public function setDate_lim_reglement($date_lim_reglement) {
        $this->date_lim_reglement = $date_lim_reglement;
        return $this;
    }

    public function setNote_private($note_private) {
        $this->note_private = $note_private;
        return $this;
    }

    public function setNote_public($note_public) {
        $this->note_public = $note_public;
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

    public function setCustom($custom) {
        $this->custom = $custom;
        return $this;
    }

    public function setarrayDetFacture($arrayDetFacture) {
        $this->arrayDetFacture = $arrayDetFacture;
        return $this;
    }


}
