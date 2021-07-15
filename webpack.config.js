'use strict';

const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { VueLoaderPlugin } = require('vue-loader');

module.exports = {
  // 打包入口
  entry: {
    index: './src/index.js',
    // home: './src/pages/index/index.js',
  },

  // 指定输出地址及打包出来的文件名
  output: {
    path: path.join(__dirname, 'dist'),
    filename: 'js/[name].js',
    library: 'mo',
    libraryTarget: 'umd',
    umdNamedDefine: true,
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/[name].css',
    }),

    new VueLoaderPlugin(),
  ],

  // 配置引入别名
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src'),
    },
  },

  module: {
    rules: [
      {
        test: /\.css$/i,
        // 执行的时候是先加载css-loader，将css解析好后再将css传递给style-loader
        use: [
          MiniCssExtractPlugin.loader,
          // 'style-loader',
          // process.env.NODE_ENV !== 'production'
          //   ? 'vue-style-loader'
          //   : MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
        ],
      },
      // less
      {
        test: /\.less$/,
        use: [
          MiniCssExtractPlugin.loader,
          // 'style-loader',
          // process.env.NODE_ENV !== 'production'
          //   ? 'vue-style-loader'
          //   : MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'less-loader',
          // 引入全局变量
          {
            loader: 'style-resources-loader',
            options: {
              patterns: ['src/style/variables.less'],
            },
          },
        ],
      },
      {
        test: /\.(jpg|png|gif|jpeg)$/,
        use: [
          {
            loader: 'url-loader',
            options: {
              // 如果图片大小小于这个值，就会被打包为base64格式
              limit: 160000,
              name: 'imgs/[name].[hash].[ext]',
            },
          },
        ],
      },
      {
        // js 需要进行语法转换
        test: /\.js$/, //普通的loader
        //不包括node_modules
        exclude: /node_modules/,
        use: [
          {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env', '@vue/babel-preset-jsx'],
              plugins: ['@babel/plugin-transform-runtime'],
            },
          },
        ],
      },
      {
        test: /\.vue$/,
        use: ['vue-loader'],
      },
    ],
  },

  optimization: {
    // 对 js文件进行压缩
    // minimizer: [new UglifyJsPlugin()],
  },
};
