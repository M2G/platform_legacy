var plyr = require('plyr');
var eventablejs = require('eventablejs'); // Eventable.js = The events part of Backbone (bind, listenTo, listenToOnce, off, on, once, stopListening, trigger, unbind)

var Equaliser = require('./equaliser.js');

function getAudioTag(src) {
  return `
    <audio crossorigin="anonymous" controls>
      <source src="${src}" type="audio/mp3">
    </audio>
  `;
}

function progressBar(audio, plyrInstance) {
  audio.addEventListener("timeupdate", function(){
    document.querySelector(".progress-bar").style.width = progress = (100 / plyrInstance.getDuration() * plyrInstance.getCurrentTime() + "%");
  });
}

function initSongLoop(audio) {
  // améliorer, choper l'element depuis l'instance de plyr.
  var loopButton = document.getElementById('loop');
  var loopButtonIcon = loopButton.querySelector('svg');

  audio.loop = false;

  loopButton.addEventListener('click', function() {
    if (audio.loop === false) {
      loopButtonIcon.style.color = "#A9A9A9";
      audio.loop = true;
    } else {
      loopButtonIcon.style.color = "";
      audio.loop = false;
    }
  });
}

function initPlyr() {
  this.plyr = plyr.setup(this.elem, {
    //  debug: true
  })[0];

  this.plyr.on('ended', function() {
    console.log('ended !!!!');
    this.trigger('song-finished');
  }.bind(this));

  this.plyr.on('play', function() {
    this.trigger('song-played');
  }.bind(this));

  this.plyr.on('pause', function() {
    console.log('pause !!!!');
    this.trigger('song-paused');
  }.bind(this));

  this.plyr.on('ready', function() {
    if (this.hasSetup !== undefined) {
      return false;
    }

    this.hasSetup = true;

    var audio = this.plyr.getMedia();

    this.equaliser = Equaliser.create({
      'audioElement': audio
    });

    this.equaliser.on('update', console.log);

    // AUDIO SONG LOOP
    initSongLoop(audio);

    progressBar(audio, this.plyr);

    console.log('readyy !!!!');
  }.bind(this));
} // End function initPlyr(){}

var Player = {
  create: function() {
    var instance = Object.assign({}, this.prototype, eventablejs);
    // syntax : Object.assign(cible, ...sources)
    // copie les valeurs de toutes les propriétés directes (non héritées) d'un objet qui sont énumérables sur un autre objet cible.
    console.log(instance);
    this.init.apply(instance, arguments);
    return instance;
  },

  init: function(params) {
    this.elem = params.elem;

    this.elem.innerHTML = getAudioTag(params.src);

    initPlyr.apply(this);
  },

  prototype: {
    play: function(play) {
      console.log('action play !');
      console.log(this.plyr);

      this.plyr.play();
      // (this.plyr.play()) ? this.plyr.pause() : this.plyr.play();
    },

    pause: function() {
      this.plyr.pause();
    },

    stop: function() {
      this.plyr.stop();
    },

    changeSong: function(newSongSrc) {
      this.plyr.source({
        type:       'audio',
        // title:      'Example title',
        sources: [{
          src: newSongSrc,
          type: 'audio/mp3'
        }]
      });

      this.play();

    }
  }
};

module.exports = Player;
