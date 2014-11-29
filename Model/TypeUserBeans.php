<?php
/**
 * Created by PhpStorm.
 * User: Alumnos
 * Date: 22-11-2014
 * Time: 12:17
 */

class type_userBeans {


  private $id_typeuser;
  private $desc;
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
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getIdTypeuser()
    {
        return $this->id_typeuser;
    }

    /**
     * @param mixed $id_typeuser
     */
    public function setIdTypeuser($id_typeuser)
    {
        $this->id_typeuser = $id_typeuser;
    }





} //class