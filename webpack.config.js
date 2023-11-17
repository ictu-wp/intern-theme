const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('build')
    .setPublicPath('/build')
    .addEntries({
      main: './app.js',
      address: './address.js'
    })
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
          paths: ['./*.php', './{inc,template-parts,woocommerce}/**/*.php']
        }
      }
    )
;

module.exports = Encore.getWebpackConfig();
