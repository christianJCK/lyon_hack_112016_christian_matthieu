<?php

namespace LyliBundle\Entity;

/**
 * Opendata
 */
class Opendata
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $codepostal;

    /**
     * @var string
     */
    private $commune;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $siteweb;

    /**
     * @var string
     */
    private $tarifsmin;

    /**
     * @var string
     */
    private $tarifsmax;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var string
     */
    private $latitude;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Opendata
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Opendata
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Opendata
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Opendata
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Opendata
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Opendata
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Opendata
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     *
     * @return Opendata
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set tarifsmin
     *
     * @param string $tarifsmin
     *
     * @return Opendata
     */
    public function setTarifsmin($tarifsmin)
    {
        $this->tarifsmin = $tarifsmin;

        return $this;
    }

    /**
     * Get tarifsmin
     *
     * @return string
     */
    public function getTarifsmin()
    {
        return $this->tarifsmin;
    }

    /**
     * Set tarifsmax
     *
     * @param string $tarifsmax
     *
     * @return Opendata
     */
    public function setTarifsmax($tarifsmax)
    {
        $this->tarifsmax = $tarifsmax;

        return $this;
    }

    /**
     * Get tarifsmax
     *
     * @return string
     */
    public function getTarifsmax()
    {
        return $this->tarifsmax;
    }

    /**
     * Set Longitude
     *
     * @param string $longitude
     *
     * @return Opendata
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get Longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set coordinates
     *
     * @param string $latitude
     *
     * @return Opendata
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
}

