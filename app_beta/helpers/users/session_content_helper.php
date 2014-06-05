<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('session_content_helper'))
{

    function main_content( $json_object )
    {

        $jobject = json_decode($json_object);

        //var_dump($jobect);

        if(isset($jobject->main)) {
            return $jobject->main;
        } else {
            return NULL;
        }

    }

}