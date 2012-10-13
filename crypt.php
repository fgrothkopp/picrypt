<?php
	function longestArray($array){
            $maxLength = $lastLength = 0;
            foreach($array as $key => $value){
                $length = count($value);

                if($length > $lastLength) $maxLength = $length;

                $lastLength = $length;
            }
            return $maxLength;
	}
	
	
	function getR($n){
            return $n;
	}
	function getG($n){
            return $n;
	}
	function getB($n){
            return $n;
	}
	if(isset($_GET["s"]))
            $s = $_GET["s"];
        if(isset($_GET["f"]))
            $s = file_get_contents($_GET["f"]);
	$im = imagecreatetruecolor(strlen($s), 1) or die ("can't create gd stream");
        for($i=0;$i<strlen($s);$i++){
            $c = imagecolorallocate($im,ord($s[$i]),0,0);
            imagesetpixel($im,$i,0,$c);
        }
        
 	imagepng($im,'temp.png',0,PNG_NO_FILTER);
?>
<pre>
Generated Image:
<img src='temp.png' id='genImg' />
<a href="index.php">Back</a>
</pre>