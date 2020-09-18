<?php
function sanitize($dirty){
	return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
}
function money($number){
	return 'KES '.number_format($number,2) ;
}
function pretty_date($date){
	 return date("m d Y h:i A", strtotime($date));

}
 ?>