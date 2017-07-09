var configuration = {
    // Global Gulp configuration
    gulp_tasks_path : 'gulp_tasks',
    bower_path : 'bower_components',

    modules : {},

    addModule : function (name, cb) {
        var module = {};
        this.modules[name] = cb({});
    }
};

configuration.addModule(
    'main',
    function (m) {
        // SASS configuration
        m.sass_root_path = './scss';
        m.sass_main_file = 'style.scss';
        m.sass_output_path = './www/assets/css';
        m.sass_output_name = 'main';

        // JS configuration
        m.js_root_path = './js';
        m.js_include_order = [
            // BOWER LIBS
            configuration.bower_path + '/jquery/dist/jquery.min.js',
            configuration.bower_path + '/fastclick/lib/fastclick.js',
            configuration.bower_path + '/PACE/pace.min.js',
            configuration.bower_path + '/fontfaceobserver/fontfaceobserver.js',
            configuration.bower_path + '/loadcss/src/loadCSS.js',
            configuration.bower_path + '/magnific-popup/dist/jquery.magnific-popup.js',

            // YOUR CODE
            m.js_root_path + '/**/*.js'
        ];
        m.js_output_path = './www/assets/js';
        m.js_output_name = 'main';

        // Templates configuration (for watching purpose)
        m.templates_root_path = './www';
        m.templates_file_extension = '.php';

        // Server configuration
        m.server = {
            base : './www',
            port : 8100,
            hostname : '0.0.0.0', // not local only
            keepalive : false
            //bin : 'C:\\UwAmp\\bin\\php\\php-5.5.15\\php.exe' // MUST be filled you your php binary is not global
        };

        // Browser sync configuration
        m.browserSync = {
            proxy : 'localhost:' + m.server.port,
            notify : false,
            logLevel : 'debug'
        };

        return m;
    }
);

module.exports = configuration;