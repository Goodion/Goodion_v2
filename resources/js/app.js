// require('./bootstrap');
require('./main');

var Turbolinks = require("turbolinks");
Turbolinks.start();

document.addEventListener('turbolinks:load', () => {
    window.livewire.rescan()
});

require('alpinejs');

