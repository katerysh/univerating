<?php
/*
 * Create artificial perturbations of the items in the list.
 * Perturbation is a lot of random permutations.
 * Calculation of the average error distance (Err) for each perturbation.
 */
function rearrangeInList ($first, $second) {
global $fts;
$s_new = $second;
$firsterror = numOfMistakes ($first, $second);
$per = 15;
            for ($i=1; $i <= $per; $i++) { 
                $delta_error1 = 0;
                $iteration = 100;
                for ($j=0; $j <= $iteration; $j++) {            
                            $x=0;
                            while($x<=$i) 
                            {
                                $x++;
                                $r1 = rand(0, count($s_new)-1);
                                $r2 = rand(0, count($s_new)-1);

                                $time = $s_new[$r2];
                                $s_new[$r2] = $s_new[$r1];
                                $s_new[$r1] = $time;
                            }
                    $newerror1 = NumOfMistakes($first, $s_new);
                    $delta = abs($newerror1-$firsterror);
                    $delta_error1 = $delta_error1 + $delta;
                    $avg_delta_error1 = ceil($delta_error1 / $iteration);
                }
                echo $i.". ".$avg_delta_error1."<br/>";
                $aarr = array ($i => $avg_delta_error1);
                $avg_delta_error1 = 0;
                $fp = fopen ($fts,'a');
                fputcsv($fp,$aarr,';');
                fclose($fp);
            }
}
?>