<?php


class pedidos {
    private $name = "llx_commande";

    private $custom;

    private $arrayDetFacture;

    private $rowid;
    private $ref;
    private $ref_ext;
    private $ref_client;
    private $fk_soc;
    private $date_creation;
    private $date_valid;
    private $date_commande;
    private $fk_statut;
    private $tva;
    
    private $total_ht;
    private $total_ttc;
    private $note_private;
    private $note_public;
  
    
    private $module_source;
    private $facture;
    private $fk_account;
    private $fk_cond_reglement;
    private $fk_mode_reglement;
    private $date_livraison;
    private $fk_shipping_method;
    private $multicurrency_total_ht;
    private $multicurrency_total_tva;
    private $multicurrency_total_ttc;

    private $arraySubCategorias;

    private $countSubCategorias = 0;
    
    public function __constructComplete($rowid, $ref, $ref_ext, $ref_client, $fk_soc, $date_creation, $date_valid,
     $date_commande, $fk_statut, $tva, $total_ht, $total_ttc, $note_private, $note_public, $module_source, $facture, 
     $fk_account, $fk_cond_reglement, $fk_mode_reglement, $date_livraison, $fk_shipping_method, $multicurrency_total_ht,
      $multicurrency_total_tva, $multicurrency_total_ttc) {
        $this->rowid = $rowid;
        $this->ref = $ref;
        $this->ref_ext = $ref_ext;
        $this->ref_client = $ref_client;
        $this->fk_soc = $fk_soc;
        $this->date_creation = $date_creation;
        $this->date_valid = $date_valid;
        $this->date_commande = $date_commande;
        $this->fk_statut = $fk_statut;
        $this->tva = $tva;

        $this->total_ht = $total_ht;
        $this->total_ttc = $total_ttc;
        $this->note_private = $note_private;
        $this->note_public = $note_public;
        $this->module_source = $module_source;
        $this->facture = $facture;
        $this->fk_account = $fk_account;
        $this->fk_cond_reglement = $fk_cond_reglement;
        $this->fk_mode_reglement = $fk_mode_reglement;
        $this->date_livraison = $date_livraison;
        
        $this->fk_shipping_method = $fk_shipping_method;
        $this->multicurrency_total_ht = $multicurrency_total_ht;
        $this->multicurrency_total_tva = $multicurrency_total_tva;
        $this->multicurrency_total_ttc = $multicurrency_total_ttc;
    }

    
    public function getName() {
        return $this->name;
    }

    public function getCustom() {
        return $this->custom;
    }

    public function getArrayDetFacture() {
        return $this->arrayDetFacture;
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

    public function getFk_soc() {
        return $this->fk_soc;
    }

    public function getDate_creation() {
        return $this->date_creation;
    }

    public function getDate_valid() {
        return $this->date_valid;
    }

    public function getDate_commande() {
        return $this->date_commande;
    }

    public function getFk_statut() {
        return $this->fk_statut;
    }

    public function getTva() {
        return $this->tva;
    }

    public function getTotal_ht() {
        return $this->total_ht;
    }

    public function getTotal_ttc() {
        return $this->total_ttc;
    }

    public function getNote_private() {
        return $this->note_private;
    }

    public function getNote_public() {
        return $this->note_public;
    }

    public function getModule_source() {
        return $this->module_source;
    }

    public function getFacture() {
        return $this->facture;
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

    public function getDate_livraison() {
        return $this->date_livraison;
    }

    public function getFk_shipping_method() {
        return $this->fk_shipping_method;
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

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setCustom($custom) {
        $this->custom = $custom;
        return $this;
    }

    public function setArrayDetFacture($arrayDetFacture) {
        $this->arrayDetFacture = $arrayDetFacture;
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

    public function setRef_ext($ref_ext) {
        $this->ref_ext = $ref_ext;
        return $this;
    }

    public function setRef_client($ref_client) {
        $this->ref_client = $ref_client;
        return $this;
    }

    public function setFk_soc($fk_soc) {
        $this->fk_soc = $fk_soc;
        return $this;
    }

    public function setDate_creation($date_creation) {
        $this->date_creation = $date_creation;
        return $this;
    }

    public function setDate_valid($date_valid) {
        $this->date_valid = $date_valid;
        return $this;
    }

    public function setDate_commande($date_commande) {
        $this->date_commande = $date_commande;
        return $this;
    }

    public function setFk_statut($fk_statut) {
        $this->fk_statut = $fk_statut;
        return $this;
    }

    public function setTva($tva) {
        $this->tva = $tva;
        return $this;
    }

    public function setTotal_ht($total_ht) {
        $this->total_ht = $total_ht;
        return $this;
    }

    public function setTotal_ttc($total_ttc) {
        $this->total_ttc = $total_ttc;
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

    public function setModule_source($module_source) {
        $this->module_source = $module_source;
        return $this;
    }

    public function setFacture($facture) {
        $this->facture = $facture;
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

    public function setDate_livraison($date_livraison) {
        $this->date_livraison = $date_livraison;
        return $this;
    }

    public function setFk_shipping_method($fk_shipping_method) {
        $this->fk_shipping_method = $fk_shipping_method;
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


    public function setArraySubCategorias($arraySubCategorias) {
        $this->arraySubCategorias = $arraySubCategorias;
        return $this;
    }

    public function setCountSubCategorias($countSubCategorias) {
        $this->countSubCategorias = $countSubCategorias;
        return $this;
    }

    public function getArraySubCategorias() {
        return $this->arraySubCategorias;
    }

    public function getCountSubCategorias() {
        return $this->countSubCategorias;
    }

}
