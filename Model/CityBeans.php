<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 22-11-14
 * Time: 12:05
 */
class cityBeans {

    private $cityId;
    private $cityName;
    private $contryId;
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
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return mixed
     */
    public function getContryId()
    {
        return $this->contryId;
    }

    /**
     * @param mixed $contryId
     */
    public function setContryId($contryId)
    {
        $this->contryId = $contryId;
    }




} 