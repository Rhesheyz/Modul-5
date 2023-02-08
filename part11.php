<?php
// split the pharse by any number of commas of space characters,
// which include " ", \r, \t, \n and \f
$keywords = preg_split("/[\s,]+/", "hypertext language,programig");
print_r($keywords);
?>