(function(){

    angular.module('coding-task')
        .controller('UserCtrl',['User', 'Education', UserCtrl])


    function UserCtrl( User, Education ) {

        var user = this;

        this.educations = [];

        this.allEducations = [];

        this.getAllEducation = getAllEducation();

        this.singleEducation = {
            'level' : "",
            'institution' : '',
            'passed_year' : ""
        };


        this.addEducation = addEducation;


        //////   getAllEducation ////
        function getAllEducation() {


            Education.getAllEducation().then( function( res ) {

                user.allEducations = res;
                console.log( user.allEducations );
            })
        }


        /////  addEducation ////
        function addEducation() {

            this.educations.push( user.singleEducation );
        }

    }

})();