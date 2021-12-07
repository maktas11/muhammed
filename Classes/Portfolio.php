<?php

class portfolio
{
    public $id;
    public $image;
    public $text;
    public function __construct()
    {
        settype($this-> id, 'integer');
    }
}