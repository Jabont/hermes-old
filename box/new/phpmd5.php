<?php
$authorID = 9876546321;
    function genWingID($table, $authorID){
        $milliseconds = round(microtime(true) * 1000);
        $merge = $table.$authorID.$milliseconds;
        $generated = hash("sha256", $merge);
        $randomedNumber = strval(rand(10000, 99999));
        // $generatedarray = str_split($genWingID);
        $randomedMerge = $generated.$randomedNumber;
        $generated = hash("sha256", $randomedMerge);
        $generated = substr($generated, 58);

        echo $generated;}
    genWingID('user', $authorID);
  ?>