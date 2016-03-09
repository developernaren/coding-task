<?php namespace App\Repos\Interfaces;

interface User
{
    /**
     * Adds multiple education to a user
     * @param array $educations
     * @return mixed
     */

    function addEducations( array $educations );

    /**
     * Adds single education to a user
     * @param Education $education
     * @return mixed
     */
    function addEducation( Education $education );

    /**
     * Get User education
     * @return mixed
     */
    function education( );


    /**
     * Save user data
     * @return mixed
     *
     */

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