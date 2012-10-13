<pre>
<?php

$im = imagecreatefrompng("temp.png");

$sX = imagesx($im);

for($i=0;$i<$sX;$i++){
    $c = imagecolorat($im, $i, 0);
    $rgb = imagecolorsforindex($im, $c);
    echo chr($rgb["red"]);
}
?>
<a href="index.php">Back</a>
</pre>