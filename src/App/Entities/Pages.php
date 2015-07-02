<?php

namespace App\Entities;


/**
 * @Entity @Table(name="pages")
 **/
class Pages extends Entity
{
	/**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     **/
	private $id;

	/**
     * @Column(type="string")
     **/
	private $title;

	/**
     * @Column(type="text")
     **/
	private $body;

	/**
     * @Column(type="string")
     **/
	private $slug;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

}