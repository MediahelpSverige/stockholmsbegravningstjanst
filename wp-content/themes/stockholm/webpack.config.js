var webpack = require('webpack');
var LiveReloadPlugin = require('webpack-livereload-plugin');
var node_dir = __dirname + '/node_modules';


module.exports = {
	entry: ['bootstrap-loader','./src/app.js'],

	output: {
		path: './dist/',
		filename: 'bundle.js'
	},
	devtool: 'source-map',
	debug: true,
	module: {
		loaders: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loaders: ['babel-loader']
			},

			{
				test: /\.json$/,
				exclude: /node_modules/,
				loaders: ['json']

			},
			{
				test: /\.scss$/,
				loaders:['style-loader',"css-loader?sourceMap", "sass-loader?sourceMap"]
			},
      {
				test: /\.css$/,
				loaders:['style-loader', 'css-loader', 'sass-loader']
			},

			{
				test: /\.(jpg|png|woff|woff2|eot|ttf|svg|otf)$/,
				loader: 'url-loader?limit=100000'
			},
      { test: /\.svg$/, loader: 'svg-loader?pngScale=2' },
    { test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/, loader: "url-loader?limit=10000&mimetype=application/font-woff" },
     { test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/, loader: "file-loader" }


		]

	},

	resolve: {
        alias: {
            jquery: "jquery/src/jquery"
        }
    },

	plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jQuery",
            "windows.jQuery": "jquery"
        }),
        new LiveReloadPlugin()
    ],


}
