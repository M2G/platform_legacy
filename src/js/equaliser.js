var eventablejs = require('eventablejs');

// tableau contenant les type de filtre Biquad
var EQ = [{
  f: 32,
  type: 'lowshelf'
}, {
  f: 64,
  type: 'peaking'
}, {
  f: 125,
  type: 'peaking'
}, {
  f: 250,
  type: 'peaking'
}, {
  f: 500,
  type: 'peaking'
}, {
  f: 1000,
  type: 'peaking'
}, {
  f: 2000,
  type: 'peaking'
}, {
  f: 4000,
  type: 'peaking'
}, {
  f: 8000,
  type: 'peaking'
}, {
  f: 16000,
  type: 'highshelf'
}];

var equaliserSettings = {
  plat:[0,0,0,0,0,0,0,0,0],
  acoustique:[0,1,2,0,0,0,0,2,2,2],
  classique:[0,6,6,3,0,0,0,0,3,3],
  country:[-1,0,1,1,1,0,0,2,3,4],
  dance:[-1,2,3,4,-1,-1,0,0,4,4],
  jazz:[0,0,1,4,4,4,0,1,3,3],
  newage:[0,2,2,0,0,0,1,2,2,2],
  pop:[-2,0,2,2,0,-1,-1,0,3,6],
  vocal:[-2,-1,-1,0,3,4,3,0,0,1],
  rock:[-1,-1,1,2,-1,-1,0,0,4,4],
  custom:[4,4,-2,0,0,0,2,2,4,2]
};

var Equaliser = {
  create: function() {
    var instance = Object.assign({}, this.prototype, eventablejs);

    this.init.apply(instance, arguments);

    return instance;
  },

  init: function(params) {
    this.mediaElement = params.audioElement;

    this.elem = document.querySelector('#filter');
    this.select = document.querySelector('.c-sidebar__choose');

    // Crée et retourne un nouvel objet AudioContext.
    var ctx = window.AudioContext || window.webkitAudioContext;
    this.context = new ctx();

    // createMediaElementSource utilisée pour créer un nouvel objet MediaElementAudioSourceNode, à partir d'un élément HTML existant <audio>  ou <video>, dont l'audio peut ensuite être lu et manipulé.
    this.sourceNode = this.context.createMediaElementSource(this.mediaElement);

    // Creation des filtres
    this.filters = EQ.map(function(band) {
      var filter = this.context.createBiquadFilter();
      filter.type = band.type; // La propriété type de l'interface BiquadFilterNode est une valeur de chaîne (enum) définissant le type d'algorithme de filtrage que le nœud met en œuvre.
      filter.gain.value = 0; // La propriété gain de l'interface BiquadFilterNode est un k-rate AudioParam, un double représentant le gain utilisé dans l'algorithme de filtrage actuel.
      filter.Q.value = 1; // La propriété Q de l'interface BiquadFilterNode est un k-rate AudioParam, un double représentant un facteur Q ou un facteur de qualité.
      filter.frequency.value = band.f; // La propriété de fréquence de l'interface BiquadFilterNode est un k-rate AudioParam, un double représentant une fréquence dans l'algorithme de filtrage actuel mesuré en hertz (Hz).
      return filter;
    }.bind(this));

    this.sourceNode.connect(this.filters[0]);

    for (var i = 0; i < this.filters.length - 1; i++) {
      this.filters[i].connect(this.filters[i + 1]);
    }

    this.filters[this.filters.length - 1].connect(this.context.destination);

    /*
    this.filters.forEach(function(filter, index) {
      // ça ?
      this.filters[index].connect(filters[index + 1]);
      // ou ça ...?
      filter.connect(filters[index + 1]);
    });
    */

    this.filters = this.filters.map(function(filter) {
      var input = document.createElement('input');
      input.setAttribute('class', 'filters');
      input.setAttribute('type', 'input');
      input.setAttribute('min', '-6');
      input.setAttribute('max', '6');
      input.setAttribute('value', '0');
      input.setAttribute('title', filter.frequency.value); // on attribut la valeur des frequences (32, 64, 125, 250, 500, 1000, 2000, 4000, 8000, 16000) à chaque attribut itle input[type="range"]
      input.setAttribute('type', 'range');

      this.elem.appendChild(input);

      // function expression qui posséde event object en param afin de parcourir .target pour récupéré la propriété .value
      // filter.gain.value retourne la valeur de AudioParam, qui puisse être la valeur des filter.
      var onChange = function(e) {
        filter.gain.value = ~~e.target.value;
      };

      input.addEventListener('input', onChange);
      input.addEventListener('change', onChange);

      filter.rangeElem = input;

      return filter;
    }.bind(this));

    this.select.addEventListener('change', this.update.bind(this));
  },

  prototype: {
    update: function(event) {
      var equaliserSettingName = event.target.value;

      this.filters.forEach(function(filter, index) {
        // this.filters[index].value =
        filter.gain.value = equaliserSettings[equaliserSettingName][index];
        filter.rangeElem.value = equaliserSettings[equaliserSettingName][index];
      });

      this.trigger('update', 'updated to : ' + equaliserSettingName);
    },

    destroy: function() {
      this.filters.forEach(function(filter) {
        filter.rangeElem.remove();
      });

      this.filters = null;
      this.context = null;
      this.mediaElement.remove();
      this.mediaElement = null;
    }
  }
};

module.exports = Equaliser;
