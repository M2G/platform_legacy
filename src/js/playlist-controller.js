// $rootScope qui nous permet d'accéder d'injecter dans n'importe quel contrôleur de notre application le scope racine de notre arbre.
// Ce service $rootScope est un objet qui regroupe directement ou indirectement sous la forme d'un arbre tous les objets scopes initialisés dans notre application.

var PlayList = require('./playlist.js');

var playlistController = function($rootScope, $scope) {
  var playlistData = JSON.parse(document.getElementById('playlist-data').innerHTML);
  var playlist = PlayList.create(playlistData);

  playlist.on('next-song', function(newSong) {
    $rootScope.$broadcast('change-song', newSong);
  });

  $rootScope.$on('song-finished', function() {
    playlist.getNextSong();
  });

  $scope.resetPlaylist = function() {
    playlist.reset();
  };

  $rootScope.$on('player-ready', function() {
    playlist.getNextSong();
  });
};

playlistController.$inject = ['$rootScope', '$scope'];

module.exports = playlistController;
