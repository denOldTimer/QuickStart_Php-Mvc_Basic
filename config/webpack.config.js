const Encore = require('@symfony/webpack-encore')
const paths = require('./paths')
const CopyWebpackPlugin = require('copy-webpack-plugin')

Encore.setOutputPath(paths.dist)
  .setPublicPath('/')
  .cleanupOutputBeforeBuild()
  .enableBuildNotifications()
  .enableSourceMaps(!Encore.isProduction())
  .disableSingleRuntimeChunk()

  // enables @babel/preset-env polyfills
  .configureBabelPresetEnv((config) => {
    config.useBuiltIns = 'usage'
    config.corejs = 3
  })

  .enableSassLoader(function (sassOptions) {}, {
    resolveUrlLoader: false
  })
  .enablePostCssLoader((options) => {
    options.config = {
      path: 'postcss.config.js'
    }
  })
  .autoProvideVariables({
    $: 'jquery',
    jQuery: 'jquery',
    'window.jQuery': 'jquery'
  })
  .addEntry('public/js/app', paths.src + '/public/js/app.js')
  .addStyleEntry('public/css/app', [paths.src + '/public/scss/app.scss'])
  .addPlugin(
    new CopyWebpackPlugin([
      // copies to {output}/static
      {
        from: paths.src,
        to: paths.dist,
        toType: 'dir',
        ignore: ['*.js', '*.scss']
      }
    ])
  )
// enables hashed filenames (e.g. app.abc123.css)
// .enableVersioning(!Encore.isProduction())

module.exports = Encore.getWebpackConfig()
