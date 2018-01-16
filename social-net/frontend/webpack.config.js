module.exports = {
    module: {
        loaders: [
            {
                test: /\.js$/,
                loader: 'babel-loader'
            }
        ]
    },
    entry: './src/index.js',
    output: {
        filename: '../backend/www/build/build.js'
    }
};