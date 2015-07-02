<?php

namespace App\Entities;


use \Doctrine\ORM\Mapping as ORM;

/**
 * @Entity @Table(name="users")
 **/
class Users extends Entity
{
	/**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     **/
	protected $id;

	/**
     * @Column(type="string")
     **/
	protected $name;

	/**
     * @Column(type="string")
     **/
	protected $lastname;

	/**
     * @Column(type="integer")
     **/
	protected $phone;

	/**
     * @Column(type="integer")
     **/
	protected $age;

	/**
     * @Column(type="string")
     **/
	protected $email;

	/**
     * @Column(type="string")
     **/
	protected $username;

	/**
     * @Column(type="string")
     **/
	protected $password;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

}