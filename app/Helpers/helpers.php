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
    function replaceVars($string, $company_id = '', $other_uri = '')
    {
        return str_ireplace(
            array(
                '{account_id}',
                '{country_id}',
                '{company_id}',
                '{other_uri}',
                '{profile_id}',
            ),
            array(
                config('constants.GRAYDON.ACCOUNT_ID'),
                config('constants.GRAYDON.COUNTRY_CODE'),
                $company_id,
                $other_uri,
                config('constants.GRAYDON.MONITORING_PROFILE_ID'),
            ) ,
            $string
        );
    }
}