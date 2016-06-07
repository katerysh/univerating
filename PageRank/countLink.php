<?php
    /* Determine how many pages link to each page.
     * It returns an array that contains a number of links on each page. */
        function getCountLinkOnPage ($countPages,$listNum)
        {
            $countLinkOnPage = array ();
            $linkOnPage = getLinkOnPages($listNum);
            for ($j = 0; $j<=$countPages-1; $j++) {
                $sum = 0;
                for ($i = 0; $i<=$countPages-1; $i++) {
                $sum += $linkOnPage[$i][$j];
                }
                $countLinkOnPage[$j] = $sum;
            
                if ($countLinkOnPage[$j] == 0) {
                    $countLinkOnPage[$j] = 1;
                }
            }
            return $countLinkOnPage;
        }
?>