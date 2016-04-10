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
