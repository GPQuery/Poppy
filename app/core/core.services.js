angular.module('poppy.core')

  .factory('Schedule', ['$resource', function($resource) {
    return $resource('api/parse-playlist/index.php', {}, 
      {query: {method: 'GET', isArray:true}});
  }]);
/*
  .factory('Request', function($resource)  {
    //var resource = $resource('http://localhost/gpquery/api/index.php/races/:raceId', {raceId: '@raceId'},
    var resource = $resource('../api/race/:raceId', {raceId: '@raceId'},
    { save: { method: 'POST'},
        list: { method: 'GET', isArray:true} });
    resource.addRequest = function(raceId)  {
      return this.save({raceId: raceId});
    }
    resource.listRaces = function() {
      return this.list();
    }
    return resource;
  });
  */