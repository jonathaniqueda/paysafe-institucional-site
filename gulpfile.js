var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Gulp tasks usando o Elixir do laravel.
 | Basicamente o Elixir reconhece os paths e algumas configuracões
 | default do laravel e facilita as tasks.
 |
 */

var inProduction = elixir.config.production;
elixir.config.images = {
    folder: 'images',
    outputFolder: 'images'
};

var HOST_IP = '192.168.33.10';
var PROXY = 'laravelmodel.app';

//Change app.less to name of less file.
elixir(function (mix) {

    var pathJs = 'public/js/main.min.js';
    var pathCss = 'public/css/style.min.css';

    if (!inProduction) {
        var pathJs = 'public/tmp/js/main.js';
        var pathCss = 'public/tmp/css/style.css';
    }

    mix.imagemin({
        optimizationLevel: 3,
        progressive: true,
        interlaced: true
    })
        // .sass(['resources/assets/sass/*.scss', 'resources/assets/sass/**/*.scss'], pathCss)
        .scripts(['resources/assets/js/*.js', 'resources/assets/js/**/*.js'], pathJs);

    //Versionamento do JS e CSS para o browser na cachear em produção
    if (inProduction) {
        mix.version([pathCss, pathJs]);
    } else {
        //Configuração do BrowserSync
        mix.browserSync({
            proxy: PROXY,
            host: HOST_IP,
            port: '8080',
            injectChanges: true,
            files: ['resources/views/**', 'public/**', '!public/**.map', '!public/build/**'],
            usePolling: true
        });
    }
});
