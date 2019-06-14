<?php
if (!function_exists('pre')) {
    function pre($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (!function_exists('replaceVars')) {
    function replaceVars($string)
    {
        return str_ireplace(
            array(
                ''
            ),
            array() .
            $string
        );
    }
}