<?php

namespace App\Model;

use Novatec\Mvc\Model;
use Doctrine\ORM\EntityManager;
use App\Entities\Users;

class User extends Model
{
	protected $em;

	public function setEntityManager(EntityManager $em)
	{
		$this->em = $em;
	}

	public function fetchAll()
	{
		$repo = $this->em->getRepository('App\\Entities\\Users');
		return $repo->findAll();
	}

	public function save()
	{
		$user = new Users;
		$user->setAll([
			'name'=>'Gustavo',
			'lastname'=>'Macchi',
			'phone'=>'1143212',
			'email'=>'gustavo@phpmoderno.com.br',
			'age'=>43,
			'username'=>'gustavo',
			'password'=>'7654'
		]);

		$this->em->persist($user);
		$this->em->flush();
	}

	public function update()
	{
		$repo = $this->em->getRepository('App\\Entities\\Users');
		$user = $repo->findOneBy(['id'=>3]);

		$user->setAll([
			'name'=>'Gustavo Sarubi',
			'age'=>42,
		]);

		$this->em->persist($user);
		$this->em->flush();
	}
}