<?php

/**
 * Set active page with custom style.
 *
 * @param string $path
 * @param string $style
 * @return string
 */
function setActive(string $path, string $style)
{
    return request()->is($path) ? $style : '';
}
