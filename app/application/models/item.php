<?php

class Item extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->items = array('portion', 'elixir');
    }

    public function getItem($index)
    {
        return $this->items[$index];
    }
}
