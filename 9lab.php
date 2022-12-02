<?php
    $fh = fopen('laba9.txt','a+'); 
    while ($line = fgets($fh)) { 
        $line = "192.255.255.0";
    $tmp = explode("|", $line); 
?>
<div>
    <?= $tmp[0]?> 
</div>

<?php } 
    fclose($fh);
?>
