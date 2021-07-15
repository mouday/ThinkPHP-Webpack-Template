const path = require('path');
//引入webpack-merge插件进行合并
const { merge } = require('webpack-merge');
//引入webpack.base.conf.js文件
const baseConfig = require('./webpack.config');

//进行合并，将webpack.base.conf.js中的配置合并到这
module.exports = merge(baseConfig, {
  //模块参数
  mode: 'development',

  devServer: {
    port: '8383',
    liveReload: true,

    // 监控文件变化
    watchContentBase: true,
    watchOptions: {
      ignored: ['**/node_modules', '**/vendor', '**/runtime'],
    },
  },

  //启用source-map方便调试
  devtool: 'source-map',
  plugins: [],
});
