<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- CLASS ---
 *
 *
 */

echo "<h1>1. CLASS</h1>";

/*
 * EXERCISE 1 : Create class Project with __construct, set, get and display functions. Create an instance and display your project's name.
 *
 */

/*
 * SUGGESTION :
class Hero
{
protected $name;

public function __construct($name = "Undefined")
{
echo "Begin of class<br>";
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

$antimage = new Hero;
$antimage->setName("ANTIMAGE")->display();

 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
class MYCLASS{

    protected $name= "aaaa";

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
        echo "$name";
    }
    function __destruct(){
        echo "<br>Finish";
    }
}

// $obj = new MYCLASS();

class NEWCLASS extends MYCLASS {    
    
}
    // $new = new NEWCLASS();
    // $new->setName("nhan");
    // echo "$a <br>";
    // var_dump($a->getName);
    // echo $new->display;

    $old= new MYCLASS();
    $old->setName("nnnn");
    echo $old->getName();