<?php

class Team
{
    protected $name;
    protected $members = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {   
        return $this->members[] = $name;
    }

    public function cancel()
    {

    }

    public function manager()
    {

    }
}

$acme = new Team('Acme');

$acme->add(['Pedro', 'Luis']);

var_dump($acme->name());
var_dump($acme->members());