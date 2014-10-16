'use strict';

module.exports = function(grunt) {
    require('time-grunt')(grunt);

    require('load-grunt-config')(grunt, {
        jitGrunt: {
            sass: 'node-sass'
        },
        config: {
            config: {
                pkg: grunt.file.readJSON('package.json'),
                bower: 'bower_components',
                app: 'wp-content/themes/vet',
                vendor: 'wp-content/themes/vet/vendor',
            }
        }
    });

    grunt.registerTask('build', function() {
        grunt.task.run([
            'concat',
            'sass',
            'watch'
        ]);
    });

    // Default task
    grunt.registerTask('default', 'build');
};
