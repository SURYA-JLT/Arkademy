<?php
     function isAcceptedName($name) {
          return preg_match('/[A-Z]{3}$/',$name) ;
     }
     $is_name = "TIARA";
                 if (isAcceptedName("$is_name")) {
                        echo "name -> $is_name is Valid" ;
                } else {
                         echo "name -> $is_name Is Invalid" ;
            }
                echo "<br>";
                function isAcceptedAge($age) {
                return preg_match('/^[0-9]{2}$/',$age) ;
                }
                $is_age = 25;
                if (isAcceptedAge("$is_age")) {
                        echo "age -> $is_age is Valid" ;
                    } else {
                            echo "age -> $is_age Is Invalid" ;
            }
                echo "<br>";
    function isAcceptedUsername($username) {
        return preg_match('/^[a-z]{4}[_.]{1}[0-9]{3}$/',$username) ;
    }
    $is_username = "yani_123";
    if (isAcceptedUsername("$is_username")) {
    echo "name -> $is_username is Valid" ;
    } else {
    echo "name -> $is_username Is Invalid" ;
    }
?>