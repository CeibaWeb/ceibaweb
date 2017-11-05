const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.sass('src/scss/keita.scss', 'css')
    .options({
        postCss: [
            tailwindcss('tailwind.js')
        ]
    });