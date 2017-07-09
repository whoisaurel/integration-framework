# Fidesio Framework

# NEEDS UPDATE !

## Additional Libs (TODO)

- "jquery_lazyload": "jquery.lazyload#~1.9.7"
- "slick-carousel": "~1.6.0"
- "jquery-hoverintent": "jquery-hoverIntent#~1.8.1"
- "magnific-popup": "Magnific-Popup#~1.1.0"
- "picturefill": "~3.0.2"
- "respond": "Respond#~1.4.2"
- "superfish": "~1.7.9"
- "underscore": "~1.8.3"

### Available Gulp tasks ###

- js-generate
    - Generate JS output
- js-check
    - Check JS validity
- sass-generate
    - Generate SASS output
- server
    - Launch server
- browser-sync
    - Launch browser sync (is server is launched)
- bs-reload
    - Reload browser sync

- default (`gulp`)
    - Generate JS and SASS outputs
- watch
    - Watch JS and SASS files and regenerate on modification
- serve
    - Launch server on templates with browser sync and watch JS, SASS and template files

### Installation ###

Folder in www local server (Uwamp > www) or (MAMP > htdocs)

```bash
npm install
```

```bash
bower install
```

### Gulp tasks usage ###

```bash
gulp serve --module MODULE_NAME
```

OR

```bash
gulp serve --m MODULE_NAME
```

### Simple module configuration example ###

```js
// MODULE_NAME module configuration
configuration.modules.MODULE_NAME = {
    // Templates configuration (for watching purpose)
    templates_root_path : './www',
    templates_file_extension : '.php',

    // SASS configuration
    sass_root_path : './scss',
    sass_main_file : 'style.scss',
    sass_output_path : './www/assets/css',
    sass_output_name : 'main',

    // JS configuration
    js_root_path : './js',
    js_include_order : [
        // BOWER LIBS
        configuration.bower_path + '/jQuery/dist/jquery.min.js',
        configuration.bower_path + '/fastclick/lib/fastclick.js',
        configuration.bower_path + '/PACE/pace.min.js',
        configuration.bower_path + '/fontfaceobserver/fontfaceobserver.standalone.js',
        configuration.bower_path + '/loadcss/src/loadCSS.js',
        configuration.bower_path + '/magnific-popup/dist/jquery.magnific-popup.js',

        // YOUR CODE
        this.js_root_path + '/**/*.js'
    ],
    js_output_path : './www/assets/js',
    js_output_name : 'main',

    // Server configuration
    server : {
        base : '.',
        port : 9090,
        keepalive : true
    },

    // Browser sync configuration
    browserSync : {
        proxy : 'http://127.0.0.1:8888/',
        port : 9090,
        open : true,
        notify : false
    }
};
```

### Framework documentation ###
/00-documentation.php

### BEM Guideline ###
We do not fully respect the BEM css method but we like this kind of OOCSS:

    .block (.header)
    .block__element (.header__column, .header__button etc.)
    .block__element--modifier (.header__element--visible, .header__element--color-2 etc.)