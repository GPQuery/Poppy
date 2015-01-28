angular.module('poppy.core')

  .factory('Schedule', ['$resource', function($resource) {
    return $resource('api/parse-playlist/index.php', {}, 
      {query: {method: 'GET', isArray:true}});
  }]);