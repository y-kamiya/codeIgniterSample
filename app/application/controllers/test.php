<?php

class Test extends CI_Controller
{
    private $name;

    public function __construct()
    {
        parent::__construct();
        $this->name = 'waiwai';
    }

    public function hello($age = 20)
    {
        echo 'Hello, ' . $this->name;
        echo '<br>Your age is ' . $age;
    }

    public function item($index = 0)
    {
        $this->load->Model('Item', 'item');
        echo $this->item->getItem($index);
    }
}
