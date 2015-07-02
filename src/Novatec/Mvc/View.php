<?php

namespace Novatec\Mvc;

interface View 
{
	public function render($texto, Array $var = []);
} 
