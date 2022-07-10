<?php

    function ArrCon($B){   
        $hat = " " ;
    foreach($B as $selected){
        $hat .= $selected.", ";
    }   
    return $hat;

    }
    function NewIsh($values){   

        $pack = [];

        foreach ($values as $a){
            $pack .= $a.", ";
        }   
    return $values;

    }


    function ArrCon2($F){   
        $hatt = " ";
        
        if (is_array($hatt) || is_object($hatt))
            {
                foreach($F as $selected2){   
                    $hatt .= "$selected2, ";   
                }   
                return $hatt;
            }  
       
    }

    // function better_crypt($input, $rounds = 12){    
    //     $salt = "";    
    //     $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));    
    //     for($i=0; $i < 22; $i++) {      
    //         $salt .= $salt_chars[array_rand($salt_chars)];    
    //     }    
    //     return crypt($input, sprintf('$2y$%02d$', $rounds) . $salt);  
    // }
?>