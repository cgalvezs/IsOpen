<?php
/**
 * Created by PhpStorm.
 * User: Benja
 * Date: 22/11/2014
 * Time: 12:32
 */

class dynamicStatusBeans {

    private $dynamic_status_id;
    private $branch_id;
    private $comment;
    private $date;
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
    public function getBranchId()
    {
        return $this->branch_id;
    }

    /**
     * @param mixed $branch_id
     */
    public function setBranchId($branch_id)
    {
        $this->branch_id = $branch_id;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDynamicStatusId()
    {
        return $this->dynamic_status_id;
    }

    /**
     * @param mixed $dynamic_status_id
     */
    public function setDynamicStatusId($dynamic_status_id)
    {
        $this->dynamic_status_id = $dynamic_status_id;
    }


} 