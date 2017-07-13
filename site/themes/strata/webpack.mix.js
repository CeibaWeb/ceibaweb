let mix = require('laravel-mix');
mix.sass('src/scss/strata.scss', 'css/strata.css')
    .js(['src/js/util.js', 'src/js/strata.js'], 'js/strata.js');