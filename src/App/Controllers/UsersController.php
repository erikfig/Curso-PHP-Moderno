<?php

namespace App\Controllers;

use App\Model\User;
use Novatec\Mvc\Controller;
use Novatec\Mvc\Model;

class UsersController extends Controller
{

	public function index()
	{
		$di = $this->getDi();
		$em = $di['doctrine']();

		$user = new User;
		$user->setEntityManager($em);

		$this->render('users/index.html', ['users'=>$user->fetchAll()]);
	}

	public function register()
    {
    	$model = new Model();
        $this->render('users.html', ['name'=>$model->getText()]);
    }

    public function save()
    {
    	$di = $this->getDi();
		$em = $di['doctrine']();

    	$user = new User;
		$user->setEntityManager($em);

		$user->update();

		header('Location: /users');
    }

}