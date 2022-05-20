<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="index.php">
    <div>
        Lenta: <input type="text" name="lenta">
    </div>

    <input type="submit" value="calculate the order>">
</form>
</body>
</html>
<?php

//phpinfo();
interface addTovar
{
    function strToArr($x, $p, $n);

    function calculatePrise($g, $r, $kg, $kz);

    function printOrderList();
}


class Tovar implements addTovar
{
    public $cod;               //product code
    public $name;              //name
    public $gurtPrice;        //wholesale price
    public $rozPrice;          //retail price
    public $countGurt;         //number for the band
    public $countNaLente;    //quantity in the order

    function __construct($cod, $name, $gurtPrice, $rozPrice, $countGurt, $countNaLente)
    {
        $this->cod = $cod;
        $this->name = $name;
        $this->gurtPrice = $gurtPrice;
        $this->rozPrice = $rozPrice;
        $this->countGurt = $countGurt;
        $this->countNaLente = $countNaLente;
//        echo "Object create<hr>";
    }

    function __destruct()
    {
//     echo "Object deleted<hr>";
    }

    function counterShow()
    {
        echo $this->cod . "<hr>";
        echo $this->name . "<hr>";
        echo $this->gurtPrice . " $ wholesale price<hr>";
        echo $this->rozPrice . " $ retail price<hr>";
        echo $this->countGurt . " units for the band<hr>";
        $this->strToArr($this->cod, $this->countNaLente, $this->name)."<hr>";
        $this->calculatePrise($this->gurtPrice, $this->rozPrice,$this->countGurt, $this->countNaLente)."<hr>";
    }

//    function drawLine()
//    {
//        echo "__________________________________<hr>";
//    }

    function strToArr($Y, $p, $n)
    {
        $lentaS = ($_GET['lenta']);
        $this->cod = $Y;
        $this->name = $n;
        echo "Tovar $n " . $this->countNaLente = substr_count($lentaS, $Y) . " in the order<hr>";
    }


    function calculatePrise($g, $r, $kg, $kz)
    {
        $this->gurtPrice = $g;
        $this->rozPrice = $r;
        $this->countGurt=$kg;
        $this->countNaLente=$kz;
        $ost=$kz%$kg;
        $div= $kz/$kg;
        $div1=(int) $div;
//        echo (integer)$kz/kg." po gurt cini<hr>";

        echo $ost." po rozd cini<hr>";
        echo $div1." po gurt cini<hr>";
        echo $zaTovar=($ost*$r)+(($kz-$ost)*$g). "<hr>";

        // TODO: Implement calculatePrise() method.
    }

    function printOrderList()
    {
        // TODO: Implement printOrderList() method.
    }
}

////////////////переробити через паттерн///////////////////////////////////////////////////
$A = new Tovar("a", "Apple", 1, 3, 4, 0);
$B = new Tovar("s", "Banana", 2, 4, 5, 0);
$C = new Tovar("d", "Melon", 3, 5, 6, 0);
///////////////////////////////////////////////////////////////////////////////////////////
$A->counterShow() . "<hr>";
$B->counterShow() . "<hr>";
$C->counterShow() . "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////
//    class CreateTtovar{
//        function
//    }

//    function priseDet($pO,$cG,$cR)
//    {
//if $countNaLente/
//    }

