<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('form_building_helper'))
{

    function table_row( $start_value, $num_col, $order, $pre_fix )
    {

    	for( $i = $start_value; $i <= $num_col; $i++ ) {

    		echo "<td> <input type='radio' name='{$pre_fix}' value='{$i}' required /> </td>";

    	}

    }
    function table_row_top( $start_value, $num_col, $order, $pre_fix )
    {

    	for( $i = $start_value; $i <= $num_col; $i++ ) {
    		
    		echo "<td class='special-tcenter-td'> <p> " .$i. " </p> <input type='radio' name='{$pre_fix}' value='{$i}' required /> </td>";

    	}

    }


    function state_list_dropwdown( $name ) { 
    	
    	$state_list = array ('Alabama'=>"AL", 'Alaska'=>"AK", 'Arizona'=>"AZ", 'Arkansas'=>"AR", 'California'=>"CA", 'Colorado'=>"CO", 'Connecticut'=>"CT", 'Delaware'=>"DE", 'District Of Columbia'=>"DC", 'Florida'=>"FL", 'Georgia'=>"GA", 'Hawaii'=>"HI", 'Idaho'=>"ID", 'Illinois'=>"IL", 'Indiana'=>"IN", 'Iowa'=>"IA", 'Kansas'=>"KS", 'Kentucky'=>"KY", 'Louisiana'=>"LA", 'Maine'=>"ME", 'Maryland'=>"MD", 'Massachusetts'=>"MA", 'Michigan'=>"MI", 'Minnesota'=>"MN", 'Mississippi'=>"MS", 'Missouri'=>"MO", 'Montana'=>"MT", 'Nebraska'=>"NE", 'Nevada'=>"NV", 'New Hampshire'=>"NH", 'New Jersey'=>"NJ", 'New Mexico'=>"NM", 'New York'=>"NY", 'North Carolina'=>"NC", 'North Dakota'=>"ND", 'Ohio'=>"OH", 'Oklahoma'=>"OK", 'Oregon'=>"OR", 'Pennsylvania'=>"PA", 'Rhode Island'=>"RI", 'South Carolina'=>"SC", 'South Dakota'=>"SD", 'Tennessee'=>"TN", 'Texas'=>"TX", 'Utah'=>"UT", 'Vermont'=>"VT", 'Virginia'=>"VA", 'Washington'=>"WA", 'West Virginia'=>"WV", 'Wisconsin'=>"WI", 'Wyoming'=>"WY");
    	
    	$form_html = "<select name='{$name}'>"; 
    	$state_count = 1;

    	foreach( $state_list as $state_full => $abrev ) {

    		$form_html .= "<option value='{$state_count}'> ".$state_full." </option>";
    		$state_count += 1;

    	}

    	$form_html .= "</select";

    	//return html for dropdown
    	return $form_html;

    }

    function form_progress( $percentDone ) {

        $int_progress = intval($percentDone);
        $html_return = '<p class="tcenter mtop20">'.$int_progress.'% Complete</p>';
        $html_return .= '<div class="complete-bar mbot20"><div class="bar-inner" style="width:'.$percentDone.'%;"></div></div>';
        return $html_return;

    }


}