ThinkPHP-Webpack-Template
===============

前后端不分离开发模板

优点：

1. 可以使用Vue带来的开发体验
2. 利于SEO
3. 避免使用 Nuxt.js前后端同构方案引入的复杂性

用到的技术栈：

1、后端

- ThinkPHP 6.0 [doc](https://www.kancloud.cn/manual/thinkphp6_0/1037479)
- Twig  [doc](https://twig.symfony.com/)

2、前端

Webpack  5.44.0 [doc](https://webpack.docschina.org/concepts/)
vue      2.6.14 [doc](https://cn.vuejs.org/v2/guide/)
less  [doc](https://less.bootcss.com/)


多应用，接口地址统一以 `/api` 开头

```bash
# 前端
http://127.0.0.1:8000/

# 接口
http://127.0.0.1:8000/api/index/index

# 后台
http://127.0.0.1:8000/admin

# 后台接口
http://127.0.0.1:8000/api-admin

```

二次开发

```bash
git clone https://github.com/mouday/ThinkPHP-Webpack-Template.git

cd ThinkPHP-Webpack-Template

# 配置ThinkPHP环境变量
cp .example.env .env

# 安装ThinkPHP依赖包
composer install

# 启动ThinkPHP服务
make dev


# 安装Webpack依赖包
npm install

# 启动Webpack服务
npm run dev

# 发布打包后的前端代码到public文件夹
npm run pub

```