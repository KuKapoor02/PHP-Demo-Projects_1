
<?php
  // Downloaded from https://github.com/KuKapoor02
    // Visit https://www.ourcoaching.com/
	
// simple function with no arguments and callbacks
function ourcoaching() {
    echo "Learn PHP from ourcoaching.com";
}
ourcoaching(); // calling function

echo "<br>";

// function with an argument
function ourcoaching_args($x) {
    echo "value input is = ".$x;
}
ourcoaching_args(422); // calling function
echo "<br>";

// function with an argument and callbacks
function ourcoaching_callback($x) {
return $x*10;
}
$y=ourcoaching_callback(22); // calling function
echo "value of callback function is = ".$y
?>