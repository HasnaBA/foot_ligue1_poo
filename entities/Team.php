<?php


namespace Entities;

class Team extends Entity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $fundation_date;

    /**
     * @var int
     */
    protected $idStadium;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $short_name;

     /**
     * @var string
     */
    protected $president;
    
     /**
     * @var string
     */
    protected $adress;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var string
     */
    protected $logo;
    
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
     * Get the value of fundation_date
     *
     * @return  \DateTime
     */ 
    public function getFundation_date()
    {
        return new \DateTime($this->fundation_date);
        
    }

    /**
     * Set the value of fundation_date
     *
     * @param  \DateTime  $fundation_date
     *
     * @return  self
     */ 
    public function setFundation_date(\DateTime $fundation_date)
    {
        $this->fundation_date = $fundation_date;

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
     * Get the value of short_name
     *
     * @return  string
     */ 
    public function getShort_name()
    {
        return $this->short_name;
    }

    /**
     * Set the value of short_name
     *
     * @param  string  $short_name
     *
     * @return  self
     */ 
    public function setShort_name(string $short_name)
    {
        $this->short_name = $short_name;

        return $this;
    }

    /**
     * Get the value of president
     *
     * @return  string
     */ 
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set the value of president
     *
     * @param  string  $president
     *
     * @return  self
     */ 
    public function setPresident(string $president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get the value of adress
     *
     * @return  string
     */ 
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @param  string  $adress
     *
     * @return  self
     */ 
    public function setAdress(string $adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of website
     *
     * @return  string
     */ 
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set the value of website
     *
     * @param  string  $website
     *
     * @return  self
     */ 
    public function setWebsite(string $website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the value of logo
     *
     * @return  string
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @param  string  $logo
     *
     * @return  self
     */ 
    public function setLogo(string $logo)
    {
        $this->logo = $logo;

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