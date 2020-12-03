<?php

class User
{
    protected $name;
    private $last_name;
 
    public function __construct($name, $last_name)
    {
        $this->name = ucfirst($name);
        $this->last_name = ucfirst($last_name);
    }
 
    public function getFullName()
    {
        return $this->name.' '.$this->last_name;
    }
}
