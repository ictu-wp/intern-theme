const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('build')
    .setPublicPath('/build')
    .addEntry('main', './app.js')
    .enableSingleRuntimeChunk()
    .enableVersioning(Encore.isProduction())
    .enablePostCssLoader()
    .configureDevServerOptions(
      /** @param {import('webpack-dev-server').Configuration} options */
      (options) => {
        options.liveReload = true;
      }
    )
;

module.exports = Encore.getWebpackConfig();
