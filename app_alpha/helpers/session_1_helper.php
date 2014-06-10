<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('session_1_helper'))
{

    function display_goal_confirm($goal, $answer, $content) {

        $output = "<div class='goal-confirm'> <p>";
			
        if(isset($content) && !empty($content)) {

             $output .= $content;
             
        }

        $output .= " <input type='checkbox' name='personality_goals[]' value='{$goal}' /> </p>";

        $output .= "</div>";

        return $output;

    }

}