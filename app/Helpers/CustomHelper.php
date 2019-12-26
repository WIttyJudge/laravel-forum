<?php

if (! function_exists('set_active')) {
    /**
     * Set active page with custom style.
     *
     * @param string $path
     * @param string $style
     * @return string
     */
    function set_active(string $path, string $style)
    {
        return request()->is($path) ? $style : '';
    }
}


if(! function_exists('show_title'))
{
    /**
     * Convert certain string value to title case.
     *
     * @param string $value
     * @return string
     */
    function show_title($value)
    {
        return Str::title($value);
    }
}
