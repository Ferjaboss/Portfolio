const mix = require('laravel-mix');
const webpack = require('webpack');
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/fonts');
mix.autoload({
    'jquery': ['$', 'window.jQuery']
});

mix.sass('resources/assets/sass/app.scss', 'public/css')
   .options({
       processCssUrls: false,
       postCss: [require('autoprefixer')],
   })
   .webpackConfig({
       plugins: [
           new webpack.ProvidePlugin({
               $: 'jquery',
               jQuery: 'jquery'
           })
       ]
   });
