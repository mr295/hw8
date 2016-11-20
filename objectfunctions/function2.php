<?php

class Person{
    public $name;
    public $lastname;
    private $UCID;

    public function getParameters() {
        var_dump(get_object_vars($this));
    }
}

  $person1 = new Person;
    var_dump(get_object_vars($person1));

  $person1->getParameters();


?>
