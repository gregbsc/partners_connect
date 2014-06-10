<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('session_1_helper'))
{

    function displaygoal($goal, $answer, $content) {

        $output = "<div>";

            if(isset($content) && !empty($content)) {
                 $output .= "<p>".$content."</p>";
            }

             $output .= "<p>".$goal . " " . $answer."</p>";

         $output .= "</div>";

         return $output;

    }



}