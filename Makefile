# 伪目标
.PHONY: dev dep-pro sync

# 运行开发环境
dev:
	php think run

# 清除缓存
clear:
	php think clear -r

# 部署
dep-pro:
	bash deploy.sh

# 同步线上数据到测试
sync:
	bash sync_data.sh
