#!/bin/bash

####################################################
# 线上部署
####################################################

# 部署的时候做了一下工作
# 进入代码目录拉取代码  cd /www/wwwroot/www.baidu.com && git pull
# 输出版本号           echo $(date "+%Y%m%d%H%M%S") > version.txt
# 删除缓存            rm -rf ./runtime/*
ssh root@127.0.0.1 "cd /www/wwwroot/www.demo.com && git pull && echo $(date "+%Y%m%d%H%M%S") > version.txt && rm -rf ./runtime/*"

echo "success: http://www.demo.com"
