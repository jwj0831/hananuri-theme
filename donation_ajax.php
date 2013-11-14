<?php
   $donation_num = filter_var($_POST["num"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
   
   switch($donation_num) {
   	case 1:
   		echo file_get_contents("./donation_1.php");
		break;	
	case 2:
    	echo file_get_contents("./donation_2.php");
    	break;
	case 3:
    	echo file_get_contents("./donation_3.php");
		break;
   }
		
?>