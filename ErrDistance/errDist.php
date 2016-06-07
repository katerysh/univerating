<?php
/*
 * Counting error distance (Err) between the two lists
 */        
function numOfMistakes ($first, $second)
        {
        global $er;
        $er = 0;
            for ($i=0; $i<(count($first)-1); $i++) {
                for ($j=$i+1; $j<count($first); $j++) {
                $keyf  = array_search($first[$i], $second);
                $keys  = array_search($first[$j], $second);
                
                if (($keyf === false) or ($keys === false)){
            
                } else {
                        if ($keyf<$keys) {
                      
                        }    else {
                                   $er = $er +1;
                                   }
                        } 
                }
            }
            return $er;
            
        }
?>
