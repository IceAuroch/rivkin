let mix = require('laravel-mix');

mix.js('src/js/app.js', 'dist/')
    .js('src/js/modules/loadmore.js', 'dist/')
    .sass('src/sass/app.scss', 'dist/')
    .options({
        processCssUrls: false
    })
    .setPublicPath('dist');