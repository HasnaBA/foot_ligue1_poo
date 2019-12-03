<?php

namespace Entities;

class Coach extends Entity
{
/**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \DateTime
     */
    protected $birthday_date;

     /**
     * @var \DateTime
     */
    protected $birthday_place;
    
     /**
     * @var int
     */
    protected $nationality;

    /**
     * @var string
     */
    protected $photo;

    /**
     * @var string
     */
    protected $link;
    

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of birthday_date
     *
     * @return  \DateTime
     */ 
    public function getBirthday_date()
    {
        return $this->birthday_date;
    }

    /**
     * Set the value of birthday_date
     *
     * @param  \DateTime  $birthday_date
     *
     * @return  self
     */ 
    public function setBirthday_date(\DateTime $birthday_date)
    {
        $this->birthday_date = $birthday_date;

        return $this;
    }

    /**
     * Get the value of birthday_place
     *
     * @return  \DateTime
     */ 
    public function getBirthday_place()
    {
        return $this->birthday_place;
    }

    /**
     * Set the value of birthday_place
     *
     * @param  \DateTime  $birthday_place
     *
     * @return  self
     */ 
    public function setBirthday_place(\DateTime $birthday_place)
    {
        $this->birthday_place = $birthday_place;

        return $this;
    }

    /**
     * Get the value of nationality
     *
     * @return  int
     */ 
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set the value of nationality
     *
     * @param  int  $nationality
     *
     * @return  self
     */ 
    public function setNationality(int $nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get the value of photo
     *
     * @return  string
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @param  string  $photo
     *
     * @return  self
     */ 
    public function setPhoto(string $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of link
     *
     * @return  string
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @param  string  $link
     *
     * @return  self
     */ 
    public function setLink(string $link)
    {
        $this->link = $link;

        return $this;
    }
}

    