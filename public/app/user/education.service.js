(function(){

    angular.module('coding-task')
        .factory('Education', [ '$q', '$http', Education ]  );


    function Education( $q, $http ) {

        education = {};

        education.getAllEducation = getAllEducation;

        return education;


        function getAllEducation() {

            return $q( function ( resolve, reject ) {

                $http.get( baseUrl + '/api/education').success( function( res ) {

                    resolve( res );
                })
            })
        }

    }


})()