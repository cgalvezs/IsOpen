<?php
/**
 * Created by PhpStorm.
 * User: Benja
 * Date: 22/11/2014
 * Time: 12:07
 */

class countryBeans {
    private $id_country;
    private $name;
    private $iso_a2;
    private $activo;

    /**
     * @return mixed
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * @param mixed $activo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    }

    /**
     * @return mixed
     */
    public function getIdCountry()
    {
        return $this->id_country;
    }

    /**
     * @param mixed $id_country
     */
    public function setIdCountry($id_country)
    {
        $this->id_country = $id_country;
    }

    /**
     * @return mixed
     */
    public function getIsoA2()
    {
        return $this->iso_a2;
    }

    /**
     * @param mixed $iso_a2
     */
    public function setIsoA2($iso_a2)
    {
        $this->iso_a2 = $iso_a2;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }




} 