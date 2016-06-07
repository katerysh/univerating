<?php
    
    function getLinkOnPages($listNum) 
        {
            $linkOnPage = array ();
            for ($i = 0; $i<=count($listNum)-1; $i++) {
                for ($j = 0; $j <= count($listNum)-1; $j++) {
                    $linkOnPage[$i][$j] = 1;
                    if ($listNum[$i] - $listNum[$j] <= 0 ) {
                        $linkOnPage[$i][$j] = 0;
                    } 
                }
            }
            return $linkOnPage;     
        }
?>
