<?php namespace App\Repos\Interfaces;


interface Education
{

   
    /**
     * @return mixed
     */
    public function getName();
    /**
     * @param mixed $name
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getInstitution();
    /**
     * @param mixed $institution
     */
    public function setInstitution($institution);
    /**
     * @return mixed
     */
    public function getPassedYear();

    /**
     * @param mixed $passed_year
     */
    public function setPassedYear($passed_year);
}