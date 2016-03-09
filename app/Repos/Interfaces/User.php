<?php namespace App\Repos\Interfaces;

interface User
{

    function addEducations( array $educations );


    function addEducation( Education $education );

    function education( );


    function save();
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
    public function getGender();

    /**
     * @param mixed $gender
     */
    public function setGender($gender);

    /**
     * @return mixed
     */
    public function getCountry();

    /**
     * @param mixed $country
     */
    public function setCountry($country);

    /**
     * @return mixed
     */
    public function getPhone();

    /**
     * @param mixed $phone
     */
    public function setPhone($phone);

    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @param mixed $email
     */
    public function setEmail($email);

    /**
     * @return mixed
     */
    public function getAddress();

    /**
     * @param mixed $address
     */
    public function setAddress($address);

    /**
     * @return mixed
     */
    public function getDob();

    /**
     * @param mixed $dob
     */
    public function setDob($dob);

    /**
     * @return mixed
     */
    public function getContactMode();

    /**
     * @param mixed $contactMode
     */
    public function setContactMode($contactMode);




}