<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 22-11-14
 * Time: 12:31
 */

class GenericStatus {



    private $genericStatusId;


    private $descriptionOpen;
    private $descriptionClose;
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
    public function getDescriptionClose()
    {
        return $this->descriptionClose;
    }

    /**
     * @param mixed $descriptionClose
     */
    public function setDescriptionClose($descriptionClose)
    {
        $this->descriptionClose = $descriptionClose;
    }

    /**
     * @return mixed
     */
    public function getDescriptionOpen()
    {
        return $this->descriptionOpen;
    }

    /**
     * @param mixed $descriptionOpen
     */
    public function setDescriptionOpen($descriptionOpen)
    {
        $this->descriptionOpen = $descriptionOpen;
    }

    /**
     * @return mixed
     */
    public function getGenericStatusId()
    {
        return $this->genericStatusId;
    }

    /**
     * @param mixed $genericStatusId
     */
    public function setGenericStatusId($genericStatusId)
    {
        $this->genericStatusId = $genericStatusId;
    }


} 