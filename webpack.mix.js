const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
const tailwindcss = require('tailwindcss')

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({ stats: { children: true }})
mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('tailwind.config.js'),
        ]
    })
    .version();
