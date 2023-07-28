// On déclare nos dépendances externes
var soundcloud = require('soundcloud');

// On déclare nos dépendances internes
var config = require('./config.js');

// Un controller angular est juste une fonction à la base
var searchController = function($rootScope, $scope, $http) {
  // On prépare nos variables de scope
  console.log('hi thereeee');
  $scope.searchTerm = '';
  $scope.searchResults = [];

  // Init Soundcloud API
  soundcloud.initialize({
    client_id: config.soundCloudClientId
  });

// $scope.add : function qui récupère url, title, artwork
  $scope.addSong = function() {
    var data = {
      url: this.track.stream_url,
      title: this.track.title,
      artwork: this.track.artwork_url || ''
    };
// $http POST(url, data, [config]);
// envoit des données
    $http({
      method: 'POST',
      url: window.location.href + 'api',
      data: data,
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      }
    }).then(function successCallback(response) {
      console.log(response);
    }, function errorCallback(response) {
      console.error(response);
    });
  };

  $scope.onSubmit = function() {
    if ($scope.searchTerm.length === 0) {
      return false;
    }

    // Nous utilisons le syntaxe "Promise"
    // (voir cette page du SDK Soundcloud https://developers.soundcloud.com/docs/api/sdks)
    soundcloud.get('/tracks', {
        q: $scope.searchTerm,
        limit: 5
      })
      .then(function(tracks) {
        // On travaille les résultats pour préparer l'url de streaming
        $scope.$apply(function() {
          $scope.searchResults = tracks.map(function(track) {
            track.stream_url += '?client_id=' + config.soundCloudClientId;
            return track;
          });
        });
      }) // end objet Promise
      .catch(function(error) {
        // Si jamais il y a une erreur c'est afficher dans le console
        console.error('error', error);
      });
  };

  $scope.playSong = function(track) {
    $rootScope.$broadcast('change-song', track.stream_url);
    console.log(track.stream_url);
  };
}; // end function
// On injecte les dépendances du controller - ceci est spécifique à angular
// On fait, on n'aura pas besoin de faire cette étape, car angular peut comprendre ses dépendances implicitement,
// mais plus tard, on voudra minifier notre code pour optimiser les performances, et lors de la minification, angular perdrait
// sa référence à ses dépendances.

// J'utilise cette syntaxe car je le trouve plus lisible et propre que nomDuController = ['dep1', 'dep2', function(dep1, dep2)];
// Voir cette page de docs = https://docs.angularjs.org/guide/di, notamment la partie "$inject Property Annotation"
searchController.$inject = ['$rootScope', '$scope', '$http'];

// Ici on définit ce que ce fichier rend utilisable lorsque on fait un require()
// Nous livrons toute la fonction
module.exports = searchController;
