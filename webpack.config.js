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
        options.static = {
          watch: false
        }
        options.watchFiles = {
          paths: ['./*.php']
        }
      }
    )
;

module.exports = Encore.getWebpackConfig();
