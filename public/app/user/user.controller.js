(function(){

    angular.module('coding-task')
        .controller('UserCtrl',['User', UserCtrl])


    function UserCtrl( User ) {

        var user = this;

        this.educations = [];

        this.singleEducation = {
            'level' : "",
            'institution' : '',
            'passed_year' : ""
        };


        this.addEducation = function(  ) {



            this.educations.push( user.singleEducation );

        }

    }

})();