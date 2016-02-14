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


