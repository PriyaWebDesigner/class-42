<!-- //Inheritance Example-1 -->
<?php

class Parents{
    public function flat(){
        echo '2BHK Flat <br>';
    }

    public function car(){
        echo 'Ferrari <br>';
    }
}

class Child extends Parents{
    public function bike(){
        echo 'R15-v3 <br>';
    }
}

$chlidObject = new Child();
$chlidObject->bike();
$chlidObject->car();
$chlidObject->flat();
echo '<br>';


// Inheritance Example-2

class Calculator1{
    public function sum($num1, $num2){
        $x = $num1;
        $y = $num2;
        
        return $x+$y;
    }

    public function mul($num1, $num2){
        $x = $num1;
        $y = $num2;
        
        return $x*$y;
    }
}

class Calculator2 extends Calculator1{
    public function sub($num1, $num2){
        $x = $num1;
        $y = $num2;
        
        return $x-$y;
    }

    public function div($num1, $num2){
        $x = $num1;
        $y = $num2;
        
        return $x/$y;
    }
}

$calculator = new Calculator2();
echo $calculator->sub(50,30);
echo '<br>';
echo $calculator->div(20,10);
echo '<br>';
echo $calculator->sum(30,60);
echo '<br>';
echo $calculator->mul(60,60);
echo '<br>';

?>

<?php


// Constructor/Destructor Example-1
class Test{

    public function __construct($num1, $num2){
        $x = $num1;
        $y = $num2;
        echo $x+$y.'<br>';
    }

    public function __destruct(){
        echo 'This is Destructor <br>';
    }

     public function show(){
        echo 'Hello Everyone <br>';
    }

     public function greetings(){
        echo 'Good Morning <br>';
    }
} 

$object = new Test(200,200);
$object->show();
$object->greetings();


?>

