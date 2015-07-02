<?php

namespace Novatec\Mvc\View;

use Novatec\Mvc\View;

class Pdf implements View
{
	public function render($texto)
	{
		echo 'PDF: '.$texto;
	}
} 
