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

## 开发端的操作

### 安装gulp

    npm install --global gulp // 全局安装glup工具
    npm install --save-dev gulp // 到laravel根目录下,作为项目的开发依赖（devDependencies）安装
    npm install gulp-rename --save // 到laravel根目录下安装gulp-rename，后面会用到

### 安装bower

    npm install -g bower // 全局安装bower工具

### Install And Update

到项目根目录下运行：

    composer update // 如果报错就执行install
    composer install
    npm install


# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
