<?php 

	// IF VALIDATION ERROR
	if (isset($_POST["all_error_required"])){
		$output = json_encode(array('type'=>'error', 'text' => $_POST["all_error_required"][0]));
		die($output);
	}
	
	// IF NO ERROR
	if (isset($_POST["all_input_id"])){
		
		$finalmessage = "";
		foreach ($_POST["all_input_id"] as $input_id) {
			
			if (is_array($_POST[$input_id])){
				$finalmessage .= $_POST[$input_id."_label"]." : ".implode(", ", $_POST[$input_id]). "\n\n";
			}
			else
			{
				$finalmessage .= $_POST[$input_id."_label"]." : ". $_POST[$input_id] . "\n\n";
			}
		}
		
		$finalmessage .= "Email : ".$_POST["inputemail"]. "\n\n";
	
		$email_to  =  'marcstuart186@gmail.com, emilywhite00@gmail.com'; 
		
		$headers = "From: info@emilyandmarcaregettingmarried.co.uk \r\n";	
		$headers .= "Reply-To: info@emilyandmarcaregettingmarried.co.uk \r\n";	
		$subject = "RSVP message from ". $_POST["inputtitle"] ." ". $_POST["inputlastname"];	
				
		if(mail($email_to, $subject, $finalmessage, $headers)){
        	$output = json_encode(array('type'=>'success', 'text' => 'Message Sent'));
    	}else{
        	$output = json_encode(array('type'=>'error', 'text' => 'Failed'));
   		}		
		die($output);	
	}	
?>