angular.module('poppy.page')
  .controller('ScheduleCtrl', function($scope, Schedule) {
    $scope.tracks = Schedule.query();
  })
  .controller('PageCtrl', function($scope) {

    // Page Component Toggles
    $scope.modeCinema = false;  // Cinema Mode

    // Navbar Collapse
    $scope.collapseNavbar = true;
    
    $scope.toggleCinema = function()  {
      $scope.modeCinema = !$scope.modeCinema
    }
});