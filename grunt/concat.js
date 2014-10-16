// Concatinate JavaScript
module.exports = {
    options: {
        separator: ';'
    },
    dev: {
        src: [
            '<%= config.bower %>/hashgrid/hashgrid.js'
        ],
        dest: '<%= config.app %>/js/dev.js',
    },
    vendor: {
        src: [
            '<%= config.bower %>/foundation/js/vendor/modernizr.js',
            '<%= config.bower %>/foundation/js/vendor/jquery.js',
            '<%= config.bower %>/foundation/js/vendor/jquery.cookie.js',
            '<%= config.bower %>/foundation/js/vendor/fastclick.js',
            '<%= config.bower %>/foundation/js/vendor/placeholder.js',
            '<%= config.bower %>/greensock/src/uncompressed/TweenMax.js',
            '<%= config.bower %>/greensock/src/uncompressed/easing/EasePack.js',
            '<%= config.bower %>/greensock/src/uncompressed/plugins/CSSPlugin.js',
            '<%= config.app %>/js/animate-scroll.js',
            '<%= config.app %>/js/parallax-scroll.js'
        ],
        dest: '<%= config.app %>/js/vendor.js',
    },
    foundation: {
        src: [
            '<%= config.bower %>/foundation/js/foundation/foundation.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.abide.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.accordion.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.alert.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.clearing.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.dropdown.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.equalizer.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.interchange.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.joyride.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.magellan.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.offcanvas.js',
            '<%= config.app %>/js/custom.foundation.orbit.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.reveal.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.slider.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.tab.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.tooltip.js',
            '<%= config.bower %>/foundation/js/foundation/foundation.topbar.js',
            '<%= config.app %>/js/vertical.offcanvas.js'
        ],
        dest: '<%= config.app %>/js/foundation.js',
    }
};
