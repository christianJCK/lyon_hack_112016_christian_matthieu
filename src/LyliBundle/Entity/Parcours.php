<?php

namespace LyliBundle\Entity;

/**
 * Parcours
 */
class Parcours
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $step1;

    /**
     * @var string
     */
    private $setp2;

    /**
     * @var string
     */
    private $setp3;


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
     * Set name
     *
     * @param string $name
     *
     * @return Parcours
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Parcours
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
     * Set step1
     *
     * @param string $step1
     *
     * @return Parcours
     */
    public function setStep1($step1)
    {
        $this->step1 = $step1;

        return $this;
    }

    /**
     * Get step1
     *
     * @return string
     */
    public function getStep1()
    {
        return $this->step1;
    }

    /**
     * Set setp2
     *
     * @param string $setp2
     *
     * @return Parcours
     */
    public function setSetp2($setp2)
    {
        $this->setp2 = $setp2;

        return $this;
    }

    /**
     * Get setp2
     *
     * @return string
     */
    public function getSetp2()
    {
        return $this->setp2;
    }

    /**
     * Set setp3
     *
     * @param string $setp3
     *
     * @return Parcours
     */
    public function setSetp3($setp3)
    {
        $this->setp3 = $setp3;

        return $this;
    }

    /**
     * Get setp3
     *
     * @return string
     */
    public function getSetp3()
    {
        return $this->setp3;
    }
}

