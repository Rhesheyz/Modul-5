<?php
$line = "Vi is the greatest word processor ever creted!";
// perform a case insensitive search for the word "vi"
if (preg_match("/\bvi\b/i", $line, $match):)
   print "match found!";
endif;
?>