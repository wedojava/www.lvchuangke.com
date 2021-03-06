var gulp = require('gulp');
var rename = require('gulp-rename');
var elixir = require('laravel-elixir');

/**
 * 拷贝任何需要的文件
 *
 * Do a 'gulp copyfiles' after bower updates
 */
gulp.task("copyfiles", function() {

    gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
        .pipe(gulp.dest("resources/assets/js/"));

    gulp.src("vendor/bower_dl/bootstrap/less/**")
        .pipe(gulp.dest("resources/assets/less/bootstrap"));

    gulp.src("vendor/bower_dl/bootstrap/dist/js/bootstrap.js")
        .pipe(gulp.dest("resources/assets/js/"));

    gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
        .pipe(gulp.dest("public/assets/fonts"));

    gulp.src("vendor/bower_dl/font-awesome/less/**")
        .pipe(gulp.dest("resources/assets/less/fontawesome"));

    gulp.src("vendor/bower_dl/font-awesome/fonts/**")
        .pipe(gulp.dest("public/assets/fonts"));

    // 拷贝 sweetalert 脚本和样式库
    gulp.src("vendor/bower_dl/sweetalert/dist/sweetalert.min.js")
        .pipe(gulp.dest("public/assets/js/"));
    gulp.src("vendor/bower_dl/sweetalert/dist/sweetalert.css")
        .pipe(gulp.dest("public/assets/css/"));

    // 拷贝 dropzone 脚本和样式库
    gulp.src("vendor/bower_dl/dropzone/dist/min/dropzone.min.js")
        .pipe(gulp.dest("public/assets/js/"));
    gulp.src("vendor/bower_dl/dropzone/dist/min/dropzone.min.css")
        .pipe(gulp.dest("public/assets/css/"));

    // 拷贝 cropper 脚本和样式库
    gulp.src("vendor/bower_dl/cropper/dist/cropper.min.js")
        .pipe(gulp.dest("public/assets/js/"));
    gulp.src("vendor/bower_dl/cropper/dist/cropper.min.css")
        .pipe(gulp.dest("public/assets/css/"));

    // 拷贝 slick 脚本和样式库
    gulp.src("vendor/bower_dl/slick-carousel/slick/**")
        .pipe(gulp.dest("public/assets/slick/"));

    // 拷贝 jquery.form.js
    gulp.src("vendor/bower_dl/jquery-form/jquery.form.js")
        .pipe(gulp.dest("public/assets/js/"));

    // 拷贝 datatables
    var dtDir = 'vendor/bower_dl/datatables-plugins/integration/';

    gulp.src("vendor/bower_dl/datatables/media/js/jquery.dataTables.js")
        .pipe(gulp.dest('resources/assets/js/'));

    gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.css')
        .pipe(rename('dataTables.bootstrap.less'))
        .pipe(gulp.dest('resources/assets/less/others/'));

    gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.js')
        .pipe(gulp.dest('resources/assets/js/'));

});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	// mix.phpUnit();
    // mix.sass('app.scss');
    // 
    // 合并脚本文件
    mix.scripts([
            'js/jquery.js',
            'js/bootstrap.js',
            'js/sweetalert.min.js',
            'js/jquery.dataTables.js',
            'js/dataTables.bootstrap.js'
        ],
        'public/assets/js/lvchuangke.js',
        'resources/assets'
    );

    // 编译 Less
    mix.less('lvchuangke.less', 'public/assets/css/lvchuangke.css');
});