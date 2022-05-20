<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="index.php">
    <div>
        Lenta: <input type=" text " name="lenta">

    </div>


    <input type="submit" value="calculate the order>">

</form>
</body>
</html>
<?php

//phpinfo();
abstract class TovarCalculator
{
    abstract function strToArr($x, $p, $n);
    abstract function calculatePrice($g, $r, $kg, $kz);
    // function printOrderList();
}

class Tovar extends TovarCalculator
{
    private $cod;               //product code
    private $name;              //name
    private $gurtPrice;         //wholesale price
    private $rozPrice;          //retail price
    private $countGurt;         //number for the band
    private $countNaLente;      //quantity in the order
    private $resultSum;         //full order price

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
        echo "<p>".$this->cod . "<br>";
        echo $this->name . "<br>";
        echo $this->gurtPrice . " $ wholesale price<br>";
        echo $this->rozPrice . " $ retail price<br>";
        echo $this->countGurt . " units for the band<br>";
        $this->strToArr($this->cod, $this->countNaLente, $this->name)."<hr>";
        $this->resultSum = $this->calculatePrice($this->gurtPrice, $this->rozPrice, $this->countGurt, $this->countNaLente) ."<hr>";
        // print_r($this);
    }

    function strToArr($Y, $p, $n)                           // кільксть товару кожного типу в заказі
    {
        $lentaString = ($_GET['lenta']);
        $this->cod = $Y;
        $this->name = $n;
        echo "Tovar $n " . $this->countNaLente = substr_count($lentaString, $Y) . " in the order<hr>";
    }

    function calculatePrice ($g, $r, $kg, $kz) : float          //реализує розрахунок ціни кожного типу товару і повертає ціну за цей тип товару
    {
        $this->gurtPrice = $g;
        $this->rozPrice = $r;
        $this->countGurt=$kg;
        $this->countNaLente=$kz;
        $ost=$kz%$kg;                                           //кількість по роздрібній ціні
        $div= $kz/$kg;
        $div1=(int) $div;                                       //кількість по гуртовій ціні з приведенніям до цілого
//      echo (integer)$kz/kg." po gurt cini<hr>";
//      $result=($ost*$r)+(($kz-$ost)*$g);
        $result=($ost*$r)+($div1*$g);

        echo $ost ." po rozd cini<hr>";
        echo $div1 ." po gurt cini<hr>";
        echo $zaTovar = $result . "<hr>";
        return $result;
     }

    static function resultSumByTovars(array $arrayTovars) : float //реализує розрахунок ціни заказу і повертає ціну за цей тип товару
    {
      for ($i=0; $i<count($arrayTovars); $i++) {
        $result += $arrayTovars[$i]->resultSum;
      }
      return $result;
    }

    function printOrderList()
    {
        // TODO: Implement printOrderList() method.
    }
}
////////////////переробити через паттерн//////////////////////////////////////////////
$A = new Tovar("a", "Apple", 7, 2, 4, 0);
$B = new Tovar("s", "Banana", 6, 1.25, 6, 0);
$C = new Tovar("d", "Melon", 0.15, 0.15, 1, 0);
$D = new Tovar("f", "Plum", 12, 12, 1, 0);
///////////////////////////////////////////////////////////////////////////////////////
//для контролю даних///////////////////////////////////////////////////////////////////
$A->counterShow() . "<hr>";
$B->counterShow() . "<hr>";
$C->counterShow() . "<hr>";
$D->counterShow() . "<hr>";

echo "<b>Full order price - ".Tovar::resultSumByTovars([$A, $B, $C, $D])." $ <b/>"; //загальна сума заказу
//var_dump(Tovar::resultSumByTovars([$A, $B, $C]));


///////////////////////////////////////////////////////////////////////////////////////
//    class CreateTtovar{
//        function
//    }

//    function priseDet($pO,$cG,$cR)
//    {
//if $countNaLente/
//    }
