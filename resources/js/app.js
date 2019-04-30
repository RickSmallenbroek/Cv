
require('./bootstrap');

require('startbootstrap-resume/js/resume.min');

/**
 * This will import SweetAlert2
 *
 */
import Swal from 'sweetalert2';

window.Swal = Swal;

/**
 * import particles for login screen
 */

import 'particles.js';

if (document.getElementById("particles-js")) {
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('particles-js', 'particles.json');
}

if (document.getElementById("settings")) {
    import("./general").then(general => {
        $(document).ready(() => {
        });

    });
}

if (document.getElementById("settings")) {
    import("./settings").then(settings => {
        $(document).ready(() => {
            settings.githubSwitch();
            settings.stackOverflowSwitch();
            settings.facebookSwitch();
        });

    });
}



