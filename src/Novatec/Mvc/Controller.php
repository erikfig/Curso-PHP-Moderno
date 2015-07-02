<?php

namespace Novatec\Mvc;

class Controller
{

	private $di;

    protected function render($texto, $var=[])
    {
    	$this->view->render($texto, $var);
    }

    public function setView(View $view)
    {
    	$this->view = $view;
    }

    public function setDi(Array $di)
    {
    	$this->di = $di;
    }

    public function getDi()
    {
    	return $this->di;
    }
} 
