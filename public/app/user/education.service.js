(function(){

    angular.module('coding-task')
        .factory('Education', [ $q, $http, Education ]  );


    function Education( $q, $http ) {

        education = {};

        education.getEducation = getEducation;

        return education;


        function getEducation() {

            return $q( function ( resolve, reject ) {

                $http.get('education', function( res ) {

                    resolve( res );
                })
            })
        }

    }


})()