<?php
    function rankingInDescending ($list, $value)
    {
        global $ftr;
        $array = array_combine($list, $value);
        arsort($array);
        
        for ($i = 1; $i <= count ($array); $i++)
        {
            $k = key($array);
            echo $i.") ".$k." - ".number_format($array[$k],3)."<br/>";
            $fp = fopen($ftr,'a');
            fwrite($fp, $k);
            fclose($fp);
            next($array);
        }
    }
?>
