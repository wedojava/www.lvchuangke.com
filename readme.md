# Log

## github的操作。
```
git init
git add README.md
git commit -m "first commit"
git remote add origin git@github.com:wedojava/www.lvchuangke.com.git
git push -u origin master
```

## 服务器上的操作

### 创建ssh秘钥
Just copy your `/root/.ssh/id_rsa.pub` content as new github SSH key (https://github.com/settings/ssh).
If you does't have `id_rsa.pub`, just create it with command `ssh-keygen -t rsa`.
### 安装nodejs和npm

类似`curl http://npmjs.org/install.sh | sudo sh`，可以参考[官方文档](https://nodejs.org/en/download/package-manager/#enterprise-linux-and-fedora)。

或者直接一行命令`sudo yum install nodejs npm` 或 `sudo yum install nodejs npm --enablerepo=epel`不过这样安装的是0.10.0版本的。

### 生成env文件
```
php -r "copy('.env.example', '.env');"
php artisan optimize // 可选，Optimize the framework for better performance
php artisan key:generate
```

## 开发端的操作

### 安装gulp

    npm install --global gulp // 全局安装glup工具
    npm install --save-dev gulp // 到laravel根目录下,作为项目的开发依赖（devDependencies）安装
    npm install gulp-rename --save // 到laravel根目录下安装gulp-rename，后面会用到

### 安装bower

    npm install -g bower // 全局安装bower工具
    npm install bower

#### 引入前端资源
```
bower install jquery --save

bower install bootstrap --save

bower install fontawesome --save

bower install datatables --save

bower install datatables-plugins --save
```

然后：

    bower update


### Install And Update

到项目根目录下运行：

    composer update // 如果报错就执行install
    composer install
    npm install


## 安装依赖包
有很多 PHP 包可用于将 Markdown 转化为 HTML。这里我们使用 Michel Fortin 提供的包 [SmartyPants](http://laravelacademy.org/tags/smartypants)，在本地主机上使用 Composer 安装下面两个依赖包：

    composer require michelf/php-markdown 
    composer require "michelf/php-smartypants=1.6.0-beta1"

如果报错：

    Failed to decode response: zlib_decode(): data error
    Retrying with degraded mode, check https://getcomposer.org/doc/articles/troubleshooting.md#degraded-mode for more info

可以尝试运行： `composer self-update` 。