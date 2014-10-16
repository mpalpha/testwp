// Compile Sass to CSS using libsass
module.exports = {
    options: {
        outputStyle: 'extended',
        includePaths: [
            '<%= config.app %>/scss',
            '<%= config.bower %>'
        ]
    },
    app: {
        sourceComments: '<%= config.app %>/css',
        cwd: '<%= config.app %>/scss',
        src: '*.scss',
        dest: '<%= config.app %>/css',
        flatten: true,
        expand: true,
        ext: '.css'
    },
    dev: {
        sourceComments: '<%= config.app %>/css',
        cwd: '<%= config.app %>/scss/dev',
        src: '*.scss',
        dest: '<%= config.app %>/css',
        flatten: true,
        expand: true,
        ext: '.css'
    }
};
