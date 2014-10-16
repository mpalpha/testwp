// Watches for changes and runs tasks
// Livereload is setup for the 35729 port by default
module.exports = {
    grunt: {
        files: ['Gruntfile.js'],
        tasks: ['sass']
    },
    sass: {
        options: {
            livereload: 35729
        },
        files: '<%= config.app %>/scss/**/*.{scss,sass}',
        tasks: ['sass']
    },
    js: {
        options: {
            livereload: 35729
        },
        files: '<%= config.app %>/**/*.js',
        tasks: ['concat']
    },
    php: {
        options: {
            livereload: 35729
        },
        files: '<%= config.app %>/**/*.{php,twig}',
        tasks: ['sass']
    },
    livereload: {
        options: {
            livereload: 35729
        },
        files: [
            '<%= config.app %>/**/*.css',
            '<%= config.app %>/images/**/*.{jpg,gif,svg,jpeg,png}'
        ]
    }
};
