
<?php
  // Downloaded from https://github.com/KuKapoor02
    // Visit https://www.ourcoaching.com/
	
$oc_global = 5; // global scope

function testCode() {
    $oc_local=43;
    echo "Variable oc_global inside function is: $oc_global</p><br>";
    echo "Variable oc_local inside function is: $oc_local</p><br>";
} 
testCode();

    echo "Variable oc_global outside function is: $oc_global</p><br>";
    echo "Variable oc_local outside function is: $oc_local</p><br>";
?>