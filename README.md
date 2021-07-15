ThinkPHP-Webpack-Template
===============

前后端不分离开发模板

优点：

1. 可以使用Vue带来的开发体验
2. 利于SEO
3. 避免使用 Nuxt.js前后端同构方案引入的复杂性

用到的技术栈：

```
# 后端
ThinkPHP 6.0
Twig

# 前端
Webpack  5.44.0
vue      2.6.14
less
```

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