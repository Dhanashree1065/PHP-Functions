<?php 

    function getData(){     //Definition
        echo "<h2>PHP Function</h2>";
    }

    getData(); //calling 

    echo "<b>Parameterized Function</b><br><br>";

    function parameterData($name,$age){     //Definition
        echo "My name is $name and age is $age";
    }

    parameterData("Dhanashree Pathare",23); //calling 

    echo "<br><br><b>Call by Value</b><br><br>";
    
    function Demo($a){                  //Definition    //formal argument
        $a++;
        return $a;
    }
    $i=5;
    echo "Original value of i = ".$i."<br>";
    echo "i = ".Demo($i)."<br>";      //actual argument   //6
    echo "i = ".Demo($i)."<br>";        //6 
    echo "i = ".$i."<br>";             //5  //original value will not get affected
   
    echo "<br><br><b>Call by Reference</b><br><br>";
    
    function Demo1(&$a){            //Definition    //formal argument
        $a++;                       //It will get change in memory location
        return $a;
    }
    $i=5;
    echo "Original value of i = ".$i."<br>";
    echo "i = ".Demo1($i)."<br>";      //actual argument   //6
    echo "i = ".Demo1($i)."<br>";       //7     //The value is changed in memory location
    echo "i = ".$i."<br>";             //7      //original value is affected

    echo "<br><br><b>Default Argument</b><br><br>";
    
    function Demo2($a="Jaya"){      //Definition  //Default argument is Jaya  
        echo $a;
    }
    Demo2("Dhanashree");            //Dhanashree
    Demo2();                        //Name is not defined, default argument Jaya will be displayed
    
?>