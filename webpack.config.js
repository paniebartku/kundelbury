const path = require('path');

// include the js minification plugin
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

// include the css extraction and minification plugins
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");


module.exports = {
  entry: [
  './js/medor_scripts.js', 
  
  './scss/bootstrap/bootstrap.scss','./scss/medor_scripts.scss'],
  output: {
    filename: './dist/dist.min.js',
    path: path.resolve(__dirname)
    
  },
  devtool: "source-map",
  performance: { hints: false },
  module: {
    rules: [
      // perform js babelization on all .js files
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ['babel-preset-env']
         }
        }
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '../assets/images/[name].[ext]',
            },
          },
        ]
      },
      // compile all .scss files to plain old css
      
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          
          MiniCssExtractPlugin.loader,
          { loader: "css-loader", options: {sourceMap: true} },
          {
            loader: "postcss-loader",
            options: {
              ident: 'postcss',
              sourceMap: true,
              plugins: [
                require('autoprefixer')({
                  'browsers': ['> 1%', 'last 2 versions']
                }),
              ]
            }
          },
          { loader: "sass-loader", options: {sourceMap: true} },
        ]
      },
      
    ]
  },
  plugins: [
    // extract css into dedicated file
    new MiniCssExtractPlugin({
      filename: './dist/dist.min.css',
      publicPath: '../../',
    })
  ],
  optimization: {
    minimizer: [
      // enable the js minification plugin
      new UglifyJSPlugin({
        test: /\.js(\?.*)?$/i,
        cache: true,
        parallel: true
      }),
      // enable the css minification plugin
      new OptimizeCSSAssetsPlugin({})
    ]
  }
};