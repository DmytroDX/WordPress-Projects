const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyPlugin = require("copy-webpack-plugin");

const JS_DIR = path.resolve( __dirname, 'src/js' );
const IMG_DIR = path.resolve( __dirname, 'src/images' );
const BUILD_DIR = path.resolve( __dirname, 'build' );

const entry = {
    main: JS_DIR + '/main.js',
};

const output = {
    path: BUILD_DIR,
    filename: 'js/[name].js'
};

const plugins = ( argv ) => [
    new MiniCssExtractPlugin({
        filename: 'css/[name].css',
    }),
    new CleanWebpackPlugin({
        cleanStaleWebpackAssets: ('production' === argv.mode),
    }),
    new CopyPlugin({
        patterns: [
            { from: "src/libraries", to: "libraries" },
        ],
    }),
];

const rules = [
    {
        test: /\.js$/,
        include: [ JS_DIR ],
        exclude: /node_modules/,
        use: {
            loader: 'babel-loader',
            options: {
                presets: [
                    ['@babel/preset-env', { targets: "defaults" }]
                ]
            }
        }
    },
    {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
            MiniCssExtractPlugin.loader,
            'css-loader', 
            'resolve-url-loader',
            {
                loader: 'sass-loader',
                options: {
                    sourceMap: true // Додайте цей параметр
                }
            }
        ],
    },
    {
        test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
        use: {
            loader: 'file-loader',
            options: {
                name: '[name].[ext]',
                outputPath: 'images/',
                publicPath: 'images/'
            },
        },
    },
];

module.exports = (env, argv) => ({
    entry: entry,
    output: output,
    devtool: 'source-map',
    optimization: {
        minimizer: [
            new CssMinimizerPlugin(),
            new TerserPlugin()
        ],
    },
    plugins: plugins( argv ),
    module: {
        rules: rules,
    },
    externals: {
        jquery: 'jQuery',
    },
    watchOptions: {
        poll: 1000,
    },
});