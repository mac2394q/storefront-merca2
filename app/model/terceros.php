<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of terceros
 *
 * @author Priceleggan
 */
class terceros {

    private $name = "llx_societe";
   
    private $rowid;
    private $nom;
    private $name_alias;
    /*External*/
    private $ref_ext;
    /*ID parent - Sarp*/
    private $parent;
    /*Thirdparty status : 0=activity ceased, 1= in activity*/
    private $status;
    private $code_client;
    private $address;
    private $zipPhone;
    private $townCity;
    private $fk_departement;
    private $fk_pays;
    private $phone;
    private $email;
    /*nit*/
    private $siren;
    /*	Identificación (CC, NIT, CE)*/
    private $siret;
    /*type of client (0/1/2)*/
    private $client;
    

    public function attributesTable(){
        return [
            array ("rowid" ,"Int"),
            array ("nom" ,"String"),
            array ("name_alias" ,"String"),
            array ("parent" ,"Int"),
            array ("status" ,"Int"),
            array ("code_client" ,"String"),
            array ("address" ,"String"),
            array ("zip" ,"String"),
            array ("town" ,"String"),
            array ("fk_departement" ,"Int"),
            array ("fk_pays" ,"Int"),
            array ("phone" ,"String"),
            array ("email" ,"String"),
            array ("siren" ,"String"),
            array ("siret" ,"String"),
            array ("client" ,"Int"), 
        ];
    }
    
    public function __construct() {
 
    }

    public function toArrayModel()
    {
        return [
            "rowid" => $this->getRowid(),
            "nom" => $this->getNom(),
            "name_alias" => $this->getName_alias(),
            "parent" => $this->getParent(),
            "status" => $this->getStatus(),
            "code_client" => $this->getCode_client(),
            "address" => $this->getAddress(),
            "zipPhone" => $this->getZipPhone(),
            "townCity" => $this->getTownCity(),
            "fk_departement" => $this->getFk_departement(),
            "fk_pays" => $this->getFk_pays(),
            "phone" => $this->getPhone(),
            "email" => $this->getEmail(),
            "siren" => $this->getSiren(),
            "siret" => $this->getSiret(),
            "client" => $this->getclient(),

        ];
    }

    public function toArrayModelId(){
        return [
            $this->getRowid(),
            $this->getNom(),
            $this->getName_alias(),
            $this->getParent(),
            $this->getStatus(),
            $this->getCode_client(),
            $this->getAddress(),
            $this->getZipPhone(),
            $this->getTownCity(),
            $this->getFk_departement(),
            $this->getFk_pays(),
            $this->getPhone(),
            $this->getEmail(),
            $this->getSiren(),
            $this->getSiret(),
            $this->getclient(),

        ];
    }

    public function getTableName(){
        return $this->name;
    }


    public function __constructComplete($rowid, $nom, $name_alias,$ref_ext ,$parent, $status, $code_client, $address, $zipPhone, $townCity, $fk_departement, $fk_pays, $phone, $email, $client, $siren, $siret) {
        $this->rowid = $rowid;
        $this->nom = $nom;
        $this->name_alias = $name_alias;
        $this->ref_ext = $ref_ext;
        $this->parent = $parent;
        $this->status = $status;
        $this->code_client = $code_client;
        $this->address = $address;
        $this->zipPhone = $zipPhone;
        $this->townCity = $townCity;
        $this->fk_departement = $fk_departement;
        $this->fk_pays = $fk_pays;
        $this->phone = $phone;
        $this->email = $email;
        $this->client = $client;
        $this->siren = $siren;
        $this->siret = $siret;
    }
    
    public function getRowid() {
        return $this->rowid;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getName_alias() {
        return $this->name_alias;
    }

    public function getRef_ext() {
        return $this->ref_ext;
    }

    public function getParent() {
        return $this->parent;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getCode_client() {
        return $this->code_client;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getZipPhone() {
        return $this->zipPhone;
    }

    public function getTownCity() {
        return $this->townCity;
    }

    public function getFk_departement() {
        return $this->fk_departement;
    }

    public function getFk_pays() {
        return $this->fk_pays;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getClient() {
        return $this->client;
    }

    public function getSiren() {
        return $this->siren;
    }

    public function getSiret() {
        return $this->siret;
    }

    public function setRowid($rowid) {
        $this->rowid = $rowid;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setName_alias($name_alias) {
        $this->name_alias = $name_alias;
        return $this;
    }

    public function setRef_ext($ref_ext) {
        $this->ref_ext = $ref_ext;
        return $this;
    }

    public function setParent($parent) {
        $this->parent = $parent;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setCode_client($code_client) {
        $this->code_client = $code_client;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setZipPhone($zipPhone) {
        $this->zipPhone = $zipPhone;
        return $this;
    }

    public function setTownCity($townCity) {
        $this->townCity = $townCity;
        return $this;
    }

    public function setFk_departement($fk_departement) {
        $this->fk_departement = $fk_departement;
        return $this;
    }

    public function setFk_pays($fk_pays) {
        $this->fk_pays = $fk_pays;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setClient($client) {
        $this->client = $client;
        return $this;
    }

    public function setSiren($siren) {
        $this->siren = $siren;
        return $this;
    }

    public function setSiret($siret) {
        $this->siret = $siret;
        return $this;
    }



    
}
