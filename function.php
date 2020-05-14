<?php 
    function goCountVisitor($linkurl){
        if (file_exists($linkurl)){
            $datafile = (int)file_get_contents($linkurl);
            $handle = fopen($linkurl, "w");
            fwrite($handle, $datafile+1);
            fclose($handle);
        }
    }