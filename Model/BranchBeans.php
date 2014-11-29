<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 22-11-14
 * Time: 12:11
 */

class BranchBeans {

    private $branchId;
    private $storeId;
    private $countryId;
    private $cityId;
    private $schedulerId;
    private $address;
    private $status;
    private $openComent;
    private $closeComent;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getBranchId()
    {
        return $this->branchId;
    }

    /**
     * @param mixed $branchId
     */
    public function setBranchId($branchId)
    {
        $this->branchId = $branchId;
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
    public function getCloseComent()
    {
        return $this->closeComent;
    }

    /**
     * @param mixed $closeComent
     */
    public function setCloseComent($closeComent)
    {
        $this->closeComent = $closeComent;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param mixed $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return mixed
     */
    public function getOpenComent()
    {
        return $this->openComent;
    }

    /**
     * @param mixed $openComent
     */
    public function setOpenComent($openComent)
    {
        $this->openComent = $openComent;
    }

    /**
     * @return mixed
     */
    public function getSchedulerId()
    {
        return $this->schedulerId;
    }

    /**
     * @param mixed $schedulerId
     */
    public function setSchedulerId($schedulerId)
    {
        $this->schedulerId = $schedulerId;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param mixed $storeId
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }




} 