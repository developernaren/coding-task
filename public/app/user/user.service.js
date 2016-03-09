(function(){

    angular.module('coding-task')
        .factory('User',[ '$q', '$http', User ]);


    function User( $q, $http ){

        user = {};

        return user;


    }
})();