<?php
    $fh = fopen('laba9.txt','r'); 
    while ($line = fgets($fh)) {    
    $tmp = explode("|", $line); 
?>
<div>
    <?= $tmp[0]?> 
</div>

<?php } 
    fclose($fh);
?>
