## PHP代码检测工具

### 功能模块
- 代码语法检测
- 代码规范检测（PSR2）

### 实现原理
> 使用git-commit钩子实现

### 安装方法
> 方法1
```
composer require miaow-growling/code-detection --prefer-dist
```
> 方法2

- 修改composer.jsonw文件
```
"require-dev": {
    ....
    "miaow-growling/code-detection":"dev-master",
    ....
 },
``` 
- 执行命令
```
composer install --prefer-dist
```

### 安装git钩子（自动安装待验证）
> 将hooks目录中的文件复制到项目的.git/hooks中

### PSR2常见问题处理方式见PHPCS.md