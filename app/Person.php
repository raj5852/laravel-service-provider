<?php

namespace App;

class Person
{
    public $name;
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
}
