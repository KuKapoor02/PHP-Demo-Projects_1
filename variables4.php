
<?php
  // Downloaded from https://github.com/KuKapoor02
    // Visit https://www.ourcoaching.com/

function testCode() {
    static $oc_static=43;
    echo "Variable oc_static inside function is: $oc_static</p><br>";
	
	$oc_static++;
} 

testCode();
testCode();
testCode();

?>