
<?php

    // function happy_birthday($k, $age ,$height){
    //     echo"Happy {$k} brithday <br>";
    //     echo"To you <br>";
    //     echo"Your are {$height} meter long, <br>";
    //     echo"Dear lovely wife you are {$age} Old <br> <br>";
    // }

    //  happy_birthday("5" , 22, 85);
    //  happy_birthday("105" , 42, 2.5);

        $username = array("salman" , "mursed ", "khan ");
        $phone = "123-456-789" ;
            // $username = strtolower($username);
            // $username = strtoupper($username);
            //$username = trim($username);
            //$username = STR_Pad($username ,20, "P");
            //$username = strrev($username);
            //$username = str_shuffle($username);
            //$counts = strlen($username);
            //$firstname = substr($username , 0, 5);
            //$lastname = substr($username , 5);
            //$fullname = explode(" 1", $username);
            $username = implode(" ", $username);


     
       // echo "Phone number is :" . $phone ; 

       echo $username;

?>