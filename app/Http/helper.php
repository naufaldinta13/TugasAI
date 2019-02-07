<?php

if (!function_exists('current_url')) {
    /**
     * Get Current Url
     *
     * @return string
     */
    function current_url()
    {
        $req = app('request');
        
        return '/' . $req->path();
    }
}

if (!function_exists('array_to_object')) {
    /**
     * Convert array to object
     *
     * @param $array
     * @return object
     */
    function array_to_object($array)
    {
        return is_array($array) ? (object) array_map(__FUNCTION__, $array) : $array;
    }
}
if (!function_exists('page_title')) {
    /**
     * Arrange Page title with formated.
     *
     * @param string $value
     * @return string
     */
    function page_title($value)
    {
        $wordarray = explode('/', $value);
        if (count($wordarray) > 1) {
            $wordarray[count($wordarray) - 1] = '<span class="text-primary">' . ($wordarray[count($wordarray) - 1]) . '</span>';
            
            return implode(' / ', $wordarray);
        }
        
        return $value;
    }
}