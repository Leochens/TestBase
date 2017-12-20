<?php 
require '../include/init.php';
unset($output);
exec('dir',$output, $status);
echo "<pre>";
var_dump($output);
exit;

 ?>