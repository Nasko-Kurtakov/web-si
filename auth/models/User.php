<?php

class User
{

    private $name = "";
    private $email = "";
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getUserName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}