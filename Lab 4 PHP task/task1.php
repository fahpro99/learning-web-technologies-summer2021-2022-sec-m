<?php

    session_start();

    $name = $_POST['name'];

    $Message="Valid User";

     for($x=0;$x<strlen($name);$x++){

        if($name[0]==range('a','z') || $name[0]==range('A','Z')) {

            if($name[$x]==range(a,z) ||$name[$x]==range(A,Z) || $name[$x]=="-" || ($name[$x]==" " && $x!=0)){

                    header("location: Task_1.html?Message={$Message}");

            }

        }

        else if($name=="null"){

            echo"Invalid User";

        }

        else{

            echo"Invalid User";

        }

    }

?>