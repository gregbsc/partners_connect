<div id="container">

	<div class="row mtop40">

		<div class="container mtop40">

			<p> Welcome to the PARTNERS CONNECT Survey. The purpose of these questions is to understand how you are currently doing and what your relationship is like. Your answers to this survey will be kept private. That means we will not share your responses with anyone outside the research team.</p>
			
			<h4>This first section asks you some general health questions about yourself.</h4>

			<form action="" method="">

				<div class="col-md-8">
					<p>1. Over the last 2 weeks, how often have you been bothered by any of the following:</p>
				</div>

				<div class="row mtop50">
					<div class="col-md-8 sm-txt">
						<div class="col-xs-2"> </div> <div class="col-xs-2">Not at all</div> <div class="col-xs-2">Several Days</div> <div class="col-xs-3">More than half the days</div><div class="col-xs-3">Nearly every day</div>  
					</div>
				</div>

				<div class="row mtop20">
					<div class="col-md-8 sm-txt">
						<div class="col-xs-2"> </div> <div class="col-xs-2"> <input type="radio" id="c1" name="name" /> </div> <div class="col-xs-2"> <input type="radio" id="c1" name="name" /> </div> <div class="col-xs-3"> <input type="radio" id="c1" name="name" /> </div><div class="col-xs-3"> <input type="radio" id="c1" name="name" /> </div>  
					</div> 
				</div>
				
			</form>

		</div>

	</div>

</div>


<pre></pre>

<?php 

$post_data = json_encode(

				array( 'questionType' => 'table', 'questionContent' => '1. Over the last 2 weeks, how often have you been bothered by any of the following:', 

					'scale' => 'daily',

					'childQuestions' => array( 
						'Little interest or pleasure in doing things?' => 'radio', 
						'Feeling down, depressed, or hopeless?' => 'radio', 
						'Trouble falling or staying asleep, or sleeping too much?' => 'radio',
						'Feeling tired or having little energy?' => 'radio',
						'Poor appetite or overeating?' => 'radio',
						'Feeling bad about yourself, or that you are a failure, or have let yourself or your family down?' => 'radio',
						'Trouble concentrating on things, such as reading the newspaper or watching television?' => 'radio',
						'Moving or speaking so slowly that other people could have noticed. Or the opposite – being so fidgety or restless that you have been moving around a lot more than usual?' => 'radio'
					) 
				)
			); 

$json_decode = json_decode($post_data);

print_r($json_decode);
//print_r($json_decode->questionType);

?>

