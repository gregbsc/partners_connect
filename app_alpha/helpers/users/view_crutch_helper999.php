<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('view_crutch_helper'))
{

    function view_name( $template_id )
    {

        $basel_path = "user/sessions";

        switch( $template_id ) {

            case 0: 
                return $basel_path.'/default';
            break;

            case 1:
                return $basel_path.'/1';
            break;

            case 2:
                return $basel_path.'/2';
            break;

            case 3:
                return $basel_path.'/3';
            break;

            case 4:
                return $basel_path.'/4';
            break;

            case 5:
                return $basel_path.'/5';
            break;

            case 6:
                return $basel_path.'/6';
            break;

            case 7:
                return $basel_path.'/7';
            break;

            case 8:
                return $basel_path.'/8';
            break;

            default:
                return $basel_path.'/default';

        }

    }

}