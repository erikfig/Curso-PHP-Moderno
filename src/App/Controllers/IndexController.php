<?php

namespace App\Controllers;

use Novatec\Mvc\Controller;
use Novatec\Mvc\Model;

class IndexController extends Controller
{
	public function index()
    {
    	$model = new Model();
        $this->render('index.html', ['name'=>$model->getText()]);
    }
}