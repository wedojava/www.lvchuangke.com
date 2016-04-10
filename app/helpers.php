<?php
function flash($title = null, $message = null)
{
	$flash = app('App\Http\Flash');
	if (func_num_args() == 0) {
		return $flash;
	}
    return $flash->info($title, $message);
}

/**
 * Return "checked" if true.
 * @param  string $value 
 * @return string        
 */
function checked($value)
{
    return $value ? 'checked' : '';
}

/**
 * Return image url for headers.
 * @param  string $value 
 * @return string        url
 */
function lawyer_avatar($value = null)
{
    if (empty($value)) {
        $value = config('lvchuangke.lawyer_avatar');
    }

    if (! starts_with($value, 'http') && $value[0] !== '/') {
        $value = config('lvchuangke.uploads.webpath') . '/' . $value;
    }

    return $value;
}

/**
 * The Path to a given post
 * @param  App\Post  $post
 * @return string
 */
function post_path(App\Post $post)
{
    return 'admin/post/' . $post->id . '/edit';
}

/**
 * 返回可读性更好的文件尺寸
 */
function human_filesize($bytes, $decimals = 2)
{
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .@$size[$factor];
}

/**
 * 判断文件的MIME类型是否为图片
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}
