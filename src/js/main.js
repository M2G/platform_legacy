// On déclare nos dépendances externes
var domready = require('domready');
var angular = require('angular');

// On déclare nos dépendances internes
var SearchController = require('./search-controller.js');
var PlayerController = require('./player-controller.js');
var PlaylistController = require('./playlist-controller.js');
// var audioPlayerDirective = require('./audio-player-directive.js');

// On déclare notre script qui réunit nos fonctionnalité
var script = require('./script.js');

// Lance notre application lorsque le DOM est ready
domready(function() {
  // Met l'élement <div id="main"> en variable
  var mainElem = document.getElementById('main');
  // On load notre fonction qui réunit nos fonctionnalité
  script();
  // Si cet élement existe (par exemple il n'existera pas sur la page d'inscription/connexion), on lance l'app angular
  if (mainElem) {
    console.log('i am launching');
    // On déclare notre app angular
    var app = angular.module('soundCloudApp', []);

    // On ajoute le controller qu'on a importé
    app.controller('searchCtrl', SearchController);
    app.controller('playerCtrl', PlayerController);
    app.controller('playlistCtrl', PlaylistController);
    // Les controlleurs : Techniquement, il s’agit d’une fonction, et plus précisément d’un constructeur, qui permet d’étendre le scope d’angular.
    //Lorsqu’un contrôleur est attaché au DOM via la directive ng-controller, angular instancie un nouvel objet contrôleur en utilisant le constructeur.

    // app.directive('audioPlayer', audioPlayerDirective);

    // On lance l'application en donnant comme élement racine mainElem
    // Ceci est pareil que déclarer ng-app="soundCloudApp" dans le HTML
    angular.bootstrap(mainElem, ['soundCloudApp']);
  }
});
