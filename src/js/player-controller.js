var Player = require('./player.js');

var playerController = function($rootScope, $scope) {

  var player = Player.create({
    elem: document.getElementById('player'),
    src: ''
  });

  $rootScope.$on('change-song', function(event, newSong) {
    player.changeSong(newSong.url);
  });

  player.on('song-finished', function() {
    console.log('i finished');
    $rootScope.$broadcast('song-finished');
  });

  $rootScope.$broadcast('player-ready');
};

playerController.$inject = ['$rootScope', '$scope'];

module.exports = playerController;
