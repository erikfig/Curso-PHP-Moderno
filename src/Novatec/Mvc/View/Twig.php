<?php

namespace Novatec\Mvc\View;

use Novatec\Mvc\View;

class Twig implements View
{
	public function __construct(\Twig_Environment $view)
	{
		$this->view = $view;
	}

	public function render($text, Array $var=[])
	{
		echo $this->view->render($text, $var);
	}
} 
