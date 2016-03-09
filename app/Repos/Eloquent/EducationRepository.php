<?php namespace App\Repos\Eloquent;

use App\Repos\Interfaces\Education;
use App\Entities\Education as MEducation;

class EducationRepository implements Education
{

    public $name;
    public $id;
    private $education;


    function __construct( $attributes = NULL )
    {

        $this->education = !empty( $attributes ) ?  new MEducation( $attributes ) : new MEducation();
    }


    function init() {

        $this->name = $this->education->name;
        $this->id = $this->education->id;

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

    /**
     * @return mixed
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param mixed $institution
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
    }

    /**
     * @return mixed
     */
    public function getPassedYear()
    {
        return $this->passed_year;
    }

    /**
     * @param mixed $passed_year
     */
    public function setPassedYear($passed_year)
    {
        $this->passed_year = $passed_year;
    }

    function all() {

        $educationArr =  collect();

        $this->education->all()->each( function( $education ) use ( &$educationArr ) {

            $education = new self ( $education->toArray() );
            $education->init();
            $educationArr->push( $education );
        });

        return $educationArr;
    }

}