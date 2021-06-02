<?php
$myfile = fopen("kupsztal.json", "w") or die("zesrałem się i smierdzi");
$txt = "dupa cyce\n";
fwrite($myfile, $txt);
$txt = "cyce dupa\n";
fwrite($myfile, $txt);
fclose($myfile);
?> 