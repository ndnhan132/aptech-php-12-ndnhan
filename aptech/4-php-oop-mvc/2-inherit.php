<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- CLASS ---
 *
 *
 */

echo "<h1>1. CLASS</h1>";

/*
 * EXERCISE 1 : Create parent class and extends it by children class.
 *
 */

/*
 * SUGGESTION :
class Hero
{
protected $name;

public function __construct($name = "Undefined")
{
echo "Start of class<br>";
$this->name = $name;
}

public function setName($name)
{
$this->name = $name;
return $this;
}

public function getName()
{
return $this->name;
}

public function display()
{
echo $this->name;
}

public function __destruct()
{
echo "<br>End of class";
}

}

class Antimage extends Hero
{
public function __construct()
{
parent::__construct("ANTIMAGE");
}

public function setName($name)
{
echo "You can not setName is $name for this hero.<br>";
return $this;
}
}

$nam = new Antimage();
$nam->setName("ABC")->display();>????????????????????????????????????????????
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";


class MYCLASS{

    protected $name= "aaaa";
    public $age= 20; 
    function getAge(){
        return $this->age;
    }
    function setAge($a=0){
        $this->age= $a;
        return $this;
    } 

    function __construct(){
        echo "Start<br>";
    }

    function setName($s){
        $this->name= $s;
        return $this;
    }
    function getName(){
        return $this->name;
    }
    function display(){
        echo $this->name;
    }
    function __destruct(){
        echo "<br>Finish";
    }
    public function aa($a= "aaaa"){
        echo $a; 
    }
}

// $obj = new MYCLASS();

class NEWCLASS extends MYCLASS {   

    public function fun1(){
        echo 11;
    }
}
     $new = new NEWCLASS();
     $new->fun1();

