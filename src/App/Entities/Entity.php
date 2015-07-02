<?php

namespace App\Entities;

abstract class Entity
{
    public function __toArray()
    {
    	$array = [];

    	foreach ($this as $k=>$v)
    		$array[$k] = $v;

    	return $array;
    }

    public function setAll(Array $data)
    {
    	foreach ($data as $k=>$v)
    		$this->$k = $v;
    }
}