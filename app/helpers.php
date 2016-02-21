<?php
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
