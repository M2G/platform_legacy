var eventablejs = require('eventablejs');

var Playlist = {
    create: function() {
        var instance = Object.assign({}, this.prototype, eventablejs);

        this.init.apply(instance, arguments);

        return instance;
    },

    init: function(data) {
        this.listofSongs = data;
    },

    prototype: {
        reset: function() {
            this.currentSongIndex = 0;

            this.queueSong();
        },

        queueSong: function() {
            this.trigger('next-song', this.listofSongs[this.currentSongIndex]);
        },

        getNextSong: function() {
            if (this.currentSongIndex <= this.listofSongs.length) {
                this.currentSongIndex += 1;
            } else {
                this.currentSongIndex = 0;
            }

            this.queueSong();
        }
    }
};

module.exports = Playlist;
