// https://www.npmjs.com/package/@lodder/grunt-postcss

const path = require('path');

module.exports = {
    options: {
        processors: [
            require('postcss-custom-media')(),          // Custom media queries: https://www.npmjs.com/package/postcss-custom-media
            require('postcss-combine-media-query')(),   // Combine media queries: https://www.npmjs.com/package/postcss-combine-media-query
            require('cssnano')()                        // Minify the css: https://www.npmjs.com/package/cssnano
        ]
    },
    dist: {
        src: 'assets/css/build/*.css'
    }
}