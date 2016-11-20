<?php

//call_user_func_array — Call a callback with an array of parameters
$name = '';
$lastname = '';

function foobar($name, $last_name) {
    echo __FUNCTION__, " My name is $name my last name is $last_name\n";
}
class foo {
    function bar($name, $last_name) {
        echo __METHOD__, " got $name and $last_name\n";
    }
}


// Call the foobar() function with 2 arguments
call_user_func_array('foobar', array("Julia", "Garcia"));

// Call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("Keith", "Williams"));


?>
