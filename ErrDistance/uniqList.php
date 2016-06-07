<?php
/*
 * Count unique items in lists
 */
function uniq ($first, $second) {
    global $uniqs;
    global $pers;
    $uniqs = 0;
        for ($i=0; $i<count($first); $i++) {
                if (in_array($first[$i], $second))  {
                    
                }  else {
                   $uniqs = $uniqs + 1;
                   echo $first[$i]."<br/>";
                   } 
            }
    $pers = ceil($uniqs / count($first) * 100);
    echo $pers."%<br/>";
    return $uniqs;
    }
?>