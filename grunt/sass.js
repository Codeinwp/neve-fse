// https://github.com/gruntjs/grunt-contrib-sass

const sass = require('node-sass');

const options = {
    implementation: sass,
    noCache: true,
    outputStyle: 'expanded',
    sourceMap: true,
};

const files = [{
    expand: true,
    cwd: '<%= paths.css %>/src',
    src: ['*.scss'],
    dest: '<%= paths.css %>/build',
    ext: '.css'
}];

module.exports = {
    scss: {
        options,
        files
    }
};
