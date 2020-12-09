<?php
class sesion {
    private $name = "llx_user";
    private $custom;
   
    private $rowid;
    private $login;
    private $pass;
    private $fk_soc;
    private $nameuser;
    private $email;
    private $statut;

    public function __construct()
    {
    }

    public function __constructComplete($rowid, $login,$pass,$nameuser,$email,$fk_soc,$statut)
    {
        $this->rowid = $rowid;
        $this->login = $login;
        $this->pass = $pass;
        $this->fk_soc = $fk_soc;
        $this->nameuser = $nameuser;
        $this->email = $email;
        $this->statut = $statut;
    }

    public function getcustom(){return $this->custom;}
    public function getrowid(){return $this->rowid;}
    public function getlogin(){return $this->login;}
    public function getpass(){return $this->pass;}
    public function getfk_soc(){return $this->fk_soc;}
    public function getnameuser(){return $this->nameuser;}
    public function getemail(){return $this->email;}
    public function getstatut(){return $this->statut;}
    public function getNameTable(){return $this->name;}

    public function setrowid($rowid){return $this->rowid = $rowid;}
    public function setlogin($login){return $this->login = $login;}
    public function setpass($pass){return $this->pass = $pass;}
    public function setname($name){return $this->name = $name;}
    public function setfk_soc($fk_soc){return $this->fk_soc = $fk_soc;}
    public function setemail($email){return $this->email = $email;}
    public function setstatut($statut){return $this->statut = $statut;}
    public function setcustom($custom){return $this->custom = $custom;}


}
?>