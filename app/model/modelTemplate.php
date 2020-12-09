<?php

/**
 * Description of modelTemplate
 *
 * @author Priceleggan
 */
class modelTemplate
{
    /* Table Name */

    const name = "modelTemplate";

    /* Atributes */

    private $a;
    private $b;

    public function __construct()
    {
    }

    public function __constructComplete($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function attributesTable(){
        return [
            array("a" ,"String"),
            array("b" ,"Int")
        ];
    }



    public function getNameTable()
    {
        return $this->name;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }

    public function toArrayModel()
    {
        return [
            "a" => $this->getA(),
            "b" => $this->getB(),
        ];
    }

    public function customQuery($insert)
    {

        return "INSERT INTO";
    }

    public function customQuery2($select)
    {

        return "SELECT";
    }
}
