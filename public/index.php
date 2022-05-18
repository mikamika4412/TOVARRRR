<?php
//phpinfo();

class Tovar
{
    public  $name;              //name
    public  $gurtPrice ;        //wholesale price
    public  $rozPrice;          //retail price
    public  $countGurt;         //number for the band
    public  $countNaLente=0;    //quantity in the order
    function __construct($name, $gurtPrice, $rozPrice, $countGurt, $countNaLente)
    {
        $this->name=$name;
        $this->gurtPrice=$gurtPrice;
        $this->rozPrice=$rozPrice;
        $this->countGurt=$countGurt;
        $this->countNaLente=$countNaLente;
        echo "Object create\n";
    }
    function __destruct()
    {
     echo "Object deleted\n";
    }

    function counterShow(){
            echo $this->name. "\n";
            echo $this->gurtPrice." $ wholesale price\n";
            echo $this->rozPrice." $ retail price\n";
            echo $this->countGurt." units for the band\n";
            echo $this->countNaLente." в заказі\n";
            $this->drawLine();
    }
    function drawLine(){echo "__________________________________\n";}
}
    //////////////// переробити через паттерн Builder//////////////////////////////////////
    $A = new Tovar("Apple",1,3,4,0);
    $B = new Tovar("Banana",2,4,5,0);
    $C = new Tovar("Melon",3,5,6,0);
    ///////////////////////////////////////////////////////////////////////////////////////
    $A->counterShow();
    $B->counterShow();
    $C->counterShow();

    function priseDet($pO,$cG,$cR)
    {
if $countNaLente/
    }

