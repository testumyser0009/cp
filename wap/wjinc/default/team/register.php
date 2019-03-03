<?php if($args[0] && $args[1]){
$sql="select * from {$this->prename}links where lid=?";
$linkData=$this->getRow($sql, $args[1]);
$sql="select * from {$this->prename}members where uid=?";
$userData=$this->getRow($sql, $args[0]);	
?>
<?php require 'register1.php';  ?>
<?php }else{?>
<?php require 'register2.php';  ?>
<?php }?>
