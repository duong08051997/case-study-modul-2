<?php


namespace Web\Model;


class Subject
{
    protected $id;
    protected $maths;
    protected $physical;
    protected $chemistry;
    protected $english;
    public function __construct($maths,$physical,$chemistry,$english)
    {
        $this->maths=$maths;
        $this->physical=$physical;
        $this->chemistry=$chemistry;
        $this->english=$english;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMaths()
    {
        return $this->maths;
    }

    /**
     * @param mixed $maths
     */
    public function setMaths($maths)
    {
        $this->maths = $maths;
    }

    /**
     * @return mixed
     */
    public function getPhysical()
    {
        return $this->physical;
    }

    /**
     * @param mixed $physical
     */
    public function setPhysical($physical)
    {
        $this->physical = $physical;
    }

    /**
     * @return mixed
     */
    public function getChemistry()
    {
        return $this->chemistry;
    }

    /**
     * @param mixed $chemistry
     */
    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }

    /**
     * @return mixed
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * @param mixed $english
     */
    public function setEnglish($english)
    {
        $this->english = $english;
    }

}