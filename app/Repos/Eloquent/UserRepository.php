<?php namespace App\Repos\Eloquent;

use App\Entities\Country;
use App\Entities\User;
use App\Repos\Interfaces\Education;
use App\Entities\Education as EloquentEducation;

class UserRepository implements \App\Repos\Interfaces\User
{

    private $user;
    private $name;
    private $gender;
    private $country;
    private $phone;
    private $email;
    private $address;
    private $dob;
    private $contactMode;

    /**
     * UserRepository constructor.
     * @param null $attributes
     */
    function __construct( $attributes = NULL )
    {

        $this->user = !empty( $attributes ) ?  new User( $attributes ) : new User();

    }

    /**
     * Add multiple educations to a user
     * @param array $educations
     * @return mixed
     */
    function addEducations( array $educations ) {

        $educationNameArr = [];

        foreach( $educations as $education ) {

            $educationNameArr[] = $education->getName();

        }

        $eloquentEducations = EloquentEducation::withNames( $educationNameArr )->get();
        $nameIdArr = [];

        foreach( $eloquentEducations as $eEducation ) {
            $nameIdArr[ $eEducation->name ] = $eEducation->id;
        }

        $eloquentEducationArr = [];

        foreach( $educations as $e ) {

            $eloquentEducationArr[ $nameIdArr[ $e->name ] ] = ['institution' => $e->institution, 'passed_year' => $e->passedYear ];

        }

        return $this->user->education()->sync( $eloquentEducationArr );
    }


    /**
     * Add a single Education to a user
     * @param Education $education
     * @return bool
     */
    function addEducation( Education $education ) {

        return $this->user->education()->save( $education );

    }

    /**
     * Fetch education of a user
     * @return mixed
     */
    function education( ) {

        return $this->user->education;
    }


    /**
     * @return User
     */
    function save() {

        $this->user->save();
        $userArr = $this->user->toArray();
        return new User( $userArr );
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->user->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->user->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->user->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->user->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->user->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->user->country_id = Country::withCode( $country )->first()->id;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->user->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->user->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->user->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->user->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->user->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->user->address = $address;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->user->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->user->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getContactMode()
    {
        return $this->user->contactMode;
    }

    /**
     * @param mixed $contactMode
     */
    public function setContactMode($contactMode)
    {
        $this->user->contact_mode = $contactMode;
    }




}