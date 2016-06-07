<?php
    /* Count condition PageRank with epsilon.
     * If at least one difference is not less than epsilon. */
        function statusOfExit ($cur, $prev) 
        {
            for ($i = 0; $i <= count($cur)-1; $i++) {
                if (abs($cur[$i] - $prev[$i]) > epsilon) {
                    return false;
                }
            }
            return true;
        }
?>
