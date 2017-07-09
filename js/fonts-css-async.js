function prepareRemoteFont(fontName, fontFamily, fontUrl) {
    // load webfonts asyncusing LoasCSS filament group lib
    loadCSS(fontUrl);

    // detect loading of fonts using fontfaceobserver lib
    var font = new FontFaceObserver(fontFamily);

    font.load().then(
        function () {
            document.documentElement.className += " fonts-loaded-" + fontName;
        }
    ).catch(
        function () {
            console.log('Font failed to load.');
        }
    );
}

var fonts = [
    [
        'Roboto',
        '//fonts.googleapis.com/css?family=Roboto:400,500,700'
    ],
    [
        'Open Sans',
        '//fonts.googleapis.com/css?family=Open+Sans:400,500,700'
    ]
];

for (var i in fonts) {
    prepareRemoteFont(parseInt(i) + 1, fonts[i][0], fonts[i][1]);
}