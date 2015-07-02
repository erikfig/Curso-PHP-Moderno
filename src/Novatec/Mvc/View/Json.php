<?php

namespace Novatec\Mvc\View;

use Novatec\Mvc\View;

class Json implements View
{
	public function render($texto)
	{
		echo '{h1:'.$texto.'}';
	}
} 
