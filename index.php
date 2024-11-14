<?php 

include_once "classess/simpleclass.class.php";

// annonymous class
// Regular class is in classess simple class
// class in one place and runs one time 
// easy to load , less heavy, doesnt store itself in memory


$obj = new SimpleClass();
$obj->helloWorld();


// here is anonymous class
    $newObj = new class(){  // if you need to pass something use () Else just new Class{}
        public function helloWorld(){
            echo "Hello World from a dynamically created class in index itself!";
        //use constructor, static method can do anything here 
        // will only run once and not exist afterwards
        }
    };
$newObj->helloWorld();
?>