<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('form_building_helper'))
{

    function table_row( $start_value, $num_col, $order, $pre_fix )
    {

    	for( $i = $start_value; $i <= $num_col; $i++ ) {

    		echo "<td> <input type='radio' name='{$pre_fix}' value='{$i}' required /> </td>";

    	}
    	

    }

}