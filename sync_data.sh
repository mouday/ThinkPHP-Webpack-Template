#!/bin/bash

####################################################
# 同步数据
####################################################

# 执行方式
# bash sync_data.sh [table_name]

# 数据源
source_host='127.0.0.1'
source_port='3306'
source_user='root'
source_password='123456'
source_database='data_pro'

# 数据目标
target_host='127.0.0.1'
target_port='3306'
target_user='root'
target_password='123456'
target_database='data_dev'

# 可选接收参数 表名
table_name=$1

# if [ ! $table_name ]; then
#     echo "error: 数据表名称未知"
#     echo "执行方式: bash demo.sh <table_name>"
#     exit
# fi

echo "开始同步..."
echo "$source_database.$table_name => $target_database.$table_name"

# 2>/dev/null 可以抑制警告信息
mysqldump \
--column-statistics=0 \
--host "${source_host}" \
--port "${source_port}" \
-u"${source_user}" \
-p"${source_password}" \
$source_database \
$table_name \
| mysql \
--host "${target_host}" \
--port "${target_port}" \
-u"${target_user}" \
-p"${target_password}" \
$target_database \
&& echo "同步完成 success"
